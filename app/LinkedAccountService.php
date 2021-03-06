<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Laravel\Socialite\Facades\Socialite;

class LinkedAccountService
{
    /**
     * Bind linked account to specific user or create new.
     *
     * @param ProviderUser $providerUser
     * @param $provider
     * @return mixed
     */
    public function bindOrCreate(ProviderUser $providerUser, $provider)
    {
        $account = LinkedAccount::where('provider_name', $provider)
            ->where('provider_id', $providerUser->getId())
            ->first();

        if ($account) {
            // renew expired token
            if (property_exists($providerUser, 'expiresIn')) {
                $account->expired_at = Carbon::now()->addSecond($providerUser->expiresIn)->format('Y-m-d H:i:s');
                $account->save();
            }

            // already bind the return the owner of linked account.
            return $account->user;
        } else {

            // check if email exist in user data
            $user = User::where('email', $providerUser->getEmail())->first();

            $existingAccount = true;
            if (!$user) {
                // create user first, first time the user register in our system.
                $avatarSource = empty($providerUser->avatar_original) ? $providerUser->getAvatar() : $providerUser->avatar_original;
                $avatar = file_get_contents($avatarSource);
                $avatarImage = Image::make($avatar);

                $basePath = 'avatars/' . Carbon::now()->format('Ym') . '/' . $providerUser->getId();
                $pathOriginal = $basePath . '_original.jpg';
                $pathSmall = $basePath . '_small.jpg';

                $avatarImage->resize(300, 300);
                Storage::disk('public')->put($pathOriginal, $avatarImage->encode('jpg', 80));

                $avatarImage->resize(55, 55);
                Storage::disk('public')->put($pathSmall, $avatarImage->encode('jpg', 80));

                // put basic information from provider as user data.
                $username = ($providerUser->getNickname() ? $providerUser->getNickname() : str_slug($providerUser->getName()));
                $userData = [
                    'username' => $username . '-' . uniqid(),
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'avatar' => $pathOriginal,
                    'status' => 'activated'
                ];

                // add additional information if exist.
                if (property_exists($providerUser, 'user')) {
                    if (key_exists('description', $providerUser->user)) {
                        $userData['about'] = $providerUser->user['description'];
                    }

                    if (key_exists('location', $providerUser->user)) {
                        $userData['location'] = $providerUser->user['location'];
                    }

                    if (key_exists('url', $providerUser->user)) {
                        $userData['website'] = $providerUser->user['url'];
                    }
                }

                $user = User::create($userData);

                $existingAccount = false;
            }

            $linkedData = [
                'provider_id' => $providerUser->getId(),
                'provider_name' => $provider,
                'token' => $providerUser->token,
            ];

            if (property_exists($providerUser, 'tokenSecret')) {
                $linkedData['secret'] = $providerUser->tokenSecret;
            }

            if (property_exists($providerUser, 'expiresIn')) {
                $expiredAt = Carbon::now()->addSecond($providerUser->expiresIn)->format('Y-m-d H:i:s');
                $linkedData['expired_at'] = $expiredAt;
            }

            // bind to account account.
            $user->linkedAccounts()->create($linkedData);

            if ($existingAccount) {
                session()->flash('status', 'warning');
                session()->flash('message', __('Your existing account :name was bind with :provider', [
                    'name' => $user->name, 'provider' => ucfirst($provider)
                ]));
            }

            return $user;
        }
    }

    /**
     * Get linked account of user by specific provider.
     *
     * @param $provider
     * @param User $user
     * @return null
     */
    public function getLinkedAccount($provider, User $user)
    {
        $linkedAccount = $user->linkedAccounts()->where('provider_name', $provider)->first();
        $account = null;
        if($linkedAccount) {
            if($provider == 'twitter') {
                $account = Socialite::driver($provider)->userFromTokenAndSecret($linkedAccount->token, $linkedAccount->secret);
            } else {
                $account = Socialite::driver($provider)->userFromToken($linkedAccount->token);
            }
        }

        return $account;
    }

    /**
     * Remove linked account from user.
     *
     * @param User $user
     * @param $provider
     */
    public function unbind(User $user, $provider)
    {
        $user->linkedAccounts()->where('provider_name', $provider)->delete();
    }

}