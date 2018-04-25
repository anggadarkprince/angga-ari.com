@extends('blog._layout')

@section('title', 'Blog Taxonomy')

@section('blog_description', 'Keywords and and tagging of articles')

@section('blog_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <ul class="box-list list-unstyled">
                <li>
                    <p>
                        <a href="#">#frameworks</a>
                        <span class="badge badge-primary badge-pill">733</span>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">#server</a>
                        <span class="badge badge-primary badge-pill">23</span>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">#programming-language</a>
                        <span class="badge badge-primary badge-pill">73</span>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">#software</a>
                        <span class="badge badge-primary badge-pill">78</span>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">#app</a>
                        <span class="badge badge-primary badge-pill">73</span>
                    </p>
                </li>
            </ul>

        </div>
    </div>
@endsection