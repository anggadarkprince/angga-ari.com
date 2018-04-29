<ul class="d-flex d-lg-block justify-content-between">
    <li{{ Route::current()->getName() == 'note.notebook' ? ' class=active' : '' }}><a href="{{ route('note.notebook') }}"><i class="icon-notebook d-none d-md-inline-block"></i>Notebook</a></li>
    <li{{ Route::current()->getName() == 'note.category' ? ' class=active' : '' }}><a href="{{ route('note.category') }}"><i class="icon-grid d-none d-md-inline-block"></i>Category</a></li>
    <li{{ Route::current()->getName() == 'note.note' ? ' class=active' : '' }}><a href="{{ route('note.note') }}"><i class="icon-docs d-none d-md-inline-block"></i>Note</a></li>
    <li{{ Route::current()->getName() == 'note.todo' ? ' class=active' : '' }}><a href="{{ route('note.todo') }}"><i class="icon-list d-none d-md-inline-block"></i>Todo</a></li>
</ul>