<ul>
    <li{{ Route::current()->getName() == 'note.notebook' ? ' class=active' : '' }}><a href="{{ route('note.notebook') }}"><i class="icon-notebook"></i>Notebook</a></li>
    <li{{ Route::current()->getName() == 'note.note' ? ' class=active' : '' }}><a href="{{ route('note.note') }}"><i class="icon-docs"></i>Note</a></li>
    <li{{ Route::current()->getName() == 'note.todo' ? ' class=active' : '' }}><a href="{{ route('note.todo') }}"><i class="icon-list"></i>Todo</a></li>
</ul>