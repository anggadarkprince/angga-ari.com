@extends('blog._layout')

@section('title', 'Blog - Post Categories')

@section('blog_description', 'Personal journal and articles')

@section('blog_content')
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <ul class="box-list list-unstyled">
                <li>
                    <p>
                        <a href="#">Computer</a>
                        <span class="badge badge-primary badge-pill">23</span>
                        <small class="text-muted">
                            General computer knowledge, operating system, and tweaking.
                        </small>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">Programming</a>
                        <span class="badge badge-primary badge-pill">634</span>
                        <small class="text-muted">
                            Algorithm many programming languages and news.
                        </small>
                    </p>
                    <ul>
                        <li>
                            <p>
                                <a href="#">Java</a>
                                <span class="badge badge-primary badge-pill">23</span>
                                <small class="text-muted">
                                    Object oriented java programming tutorial.
                                </small>
                            </p>
                            <ul>
                                <li>
                                    <p>
                                        <a href="#">JPA</a>
                                        <span class="badge badge-primary badge-pill">12</span>
                                        <small class="text-muted">
                                            JPA and Hibernate ORM tutorial.
                                        </small>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Spring</a>
                                        <span class="badge badge-primary badge-pill">5</span>
                                        <small class="text-muted">
                                            Java web with Spring framework.
                                        </small>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                <a href="#">PHP</a>
                                <span class="badge badge-primary badge-pill">25</span>
                                <small class="text-muted">
                                    Most popular web programming language.
                                </small>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#">Javascript</a>
                                <span class="badge badge-primary badge-pill">73</span>
                                <small class="text-muted">
                                    Front end browser script programming.
                                </small>
                            </p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <a href="#">Codeigniter</a>
                        <span class="badge badge-primary badge-pill">12</span>
                        <small class="text-muted">
                            Simple PHP framework in the world.
                        </small>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">Laravel</a>
                        <span class="badge badge-primary badge-pill">12</span>
                        <small class="text-muted">
                            New and popular PHP framework.
                        </small>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="#">Uncategories</a>
                        <span class="badge badge-primary badge-pill">2</span>
                        <small class="text-muted">
                            Another blog categories.
                        </small>
                    </p>
                </li>
            </ul>

        </div>
    </div>
@endsection