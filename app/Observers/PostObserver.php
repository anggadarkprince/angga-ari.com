<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 19/06/18
 * Time: 17:15
 */

namespace App\Observers;


use App\Post;
use Illuminate\Support\Facades\Storage;

class PostObserver
{
    /**
     * Delete cover by give path file.
     *
     * @param $cover
     */
    private function deleteOldCover($cover)
    {
        if (!empty($cover)) {
            Storage::disk('public')->delete([
                $cover,
                get_small_version($cover),
                get_small_version($cover, '_medium')
            ]);
        }
    }

    /**
     * Listen to the Post updated event.
     *
     * @param Post $post
     * @return void
     */
    public function updated(Post $post)
    {
        if ($post->isDirty('cover')) {
            $this->deleteOldCover($post->getOriginal('cover'));
        }
    }

    /**
     * Listen to the Post deleting event.
     *
     * @param Post $post
     * @return void
     */
    public function deleting(Post $post)
    {
        if ($post->isForceDeleting()) {
            $this->deleteOldCover($post->cover);
        }
    }
}