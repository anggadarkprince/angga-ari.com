@extends('layouts.app')

@section('title', 'Cookie Policy')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <article>
                    <h3>Cookie Policy</h3>
                    <p class="text-muted">This terms is effective July 30, 2016.</p>
                    <p>
                        Cookies consist of portions of code installed in the browser that assist the Owner in providing the service according to the purposes described. Some of the purposes for which the Cookies are installed may also require the User's consent.
                    </p>

                    <h4>Technical Cookies and Cookies serving aggregated statistical purposes</h4>
                    <ol>
                        <li>Activity strictly necessary for the functioning of the service
                            <p>This Application uses Cookies to save the User's session and to carry out other activities that are strictly necessary for the operation of the same, for example in relation to the distribution of traffic.</p>
                        </li>
                        <li>
                            Activity regarding the saving of preferences, optimization, and statistics
                            <p>This Application uses Cookies to save browsing preferences and to optimize the User's browsing experience. Among these Cookies are, for example, those to set the language and the currency or for the management of first party statistics employed directly by the Owner of the site.</p>
                        </li>
                        <li>
                            Other types of Cookies or third-party tools that might use them
                            <p>Some of the services listed below collect statistics in aggregated form and may not require the consent of the User or may be managed directly by the Owner - depending on how they are described - without the help of third parties.</p>
                            <p>If any third party operated services are listed among the tools below, these may be used to track Users’ browsing habits – in addition to the information specified herein and without the Owner’s knowledge. Please refer to the privacy policy of the listed services for detailed information.</p>
                        </li>
                    </ol>

                    <h4>Analytics</h4>
                    <p>The services contained in this section enable the Owner to monitor and analyze web traffic and can be used to keep track of User behavior.</p>

                    <h4>Google Analytics (Google Inc.)</h4>
                    <p>
                        Google Analytics is a web analysis service provided by Google Inc. (“Google”). Google utilizes the Data collected to track and examine the use of this Application, to prepare reports on its activities and share them with other Google services. Google may use the Data collected to contextualize and personalize the ads of its own advertising network.
                        <br>
                        Personal Data collected: Cookie and Usage data.
                        <br>
                        Place of processing: ID – <a href="{{ route('index') }}">Privacy Policy</a> – <a href="{{ route('index') }}">Opt Out</a>
                    </p>

                    <h4>Traffic optimization and distribution</h4>
                    <p>These services allow this Application to distribute their content using servers located across different countries and to optimize their performance.</p>
                    <p>Which Personal Data are processed depends on the characteristics and the way these services are implemented. Their function is to filter communications between this Application and the User's browser.</p>
                    <p>Considering the widespread distribution of this system, it is difficult to determine the locations to which the contents that may contain Personal Information User are transferred.</p>

                    <h4>How can I manage the installation of Cookies?</h4>
                    <p>
                        In addition to what is specified in this document, the User can manage preferences for Cookies directly from within their own browser and prevent – for example – third parties from installing them.
                        Through the browser preferences, it is also possible to delete Cookies installed in the past, including the Cookies that might possibly have saved the consent for the installation of Cookies by this website.
                    </p>
                    <p>
                        It is important to note that by disabling all Cookies, the functioning of this site may be compromised. Users can find information about how to manage Cookies in their browser at the following addresses: Google Chrome, Mozilla Firefox, Apple Safari and Microsoft Windows Explorer.
                    </p>
                    <p>
                        In the case of services provided by third parties, Users can exercise their right to withdraw from the tracking activity by utilizing the information provided in the third party’s privacy policy, by clicking the opt-out link – if provided – or by contacting the third party.
                    </p>
                    <p>
                        Notwithstanding the above, the Owner informs that Users may take advantage of: Your Online Choices. This service allows Users to select their tracking preferences for most of the advertising tools. The Owner thus recommends that Users make use of this resource in addition to the information provided in this document.
                    </p>


                    <p class="mb-4">Find more information? <a href="{{ route('contact') }}">Click Here</a></p>

                    <p class="small text-muted">Last updated by Administrator at 19 November 2018</p>
                </article>
            </div>
        </div>
    </div>
@endsection