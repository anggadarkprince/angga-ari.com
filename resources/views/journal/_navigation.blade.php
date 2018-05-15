<?php
$routeName = Route::current()->getName();
$activeNotebook = preg_match('/^journal.notebook/', $routeName) ? ' class=active' : '';
$activeNote = preg_match('/^journal.note/', $routeName) && empty($activeNotebook) ? ' class=active' : '';
$activeTodo = preg_match('/^journal.todo/', $routeName) ? ' class=active' : '';
$activeCategory = preg_match('/^journal.category/', $routeName) ? ' class=active' : '';
?>
<ul class="d-flex d-lg-block justify-content-between">
    <li{{ $activeNotebook }}><a href="{{ route('journal.notebook') }}"><i class="icon-notebook d-none d-md-inline-block"></i>Notebook</a></li>
    <li{{ $activeNote }}><a href="{{ route('journal.note') }}"><i class="icon-docs d-none d-md-inline-block"></i>Note</a></li>
    <li{{ $activeTodo }}><a href="{{ route('journal.todo') }}"><i class="icon-list d-none d-md-inline-block"></i>Todo</a></li>
    <li{{ $activeCategory }}><a href="{{ route('journal.category') }}"><i class="icon-grid d-none d-md-inline-block"></i>Category</a></li>
</ul>