<div class="modal fade" id="modal-form-todo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="icon-note mr-2"></i>New Task</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body py-2">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="category">Task Title</label>
                        <input type="text" class="form-control" id="category" placeholder="Title of your activity" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="description" placeholder="Detail of task or activity"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="date">Reminder Date</label>
                                <input type="text" class="form-control" id="date" placeholder="Date of task" value="{{ date('d F Y') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="date">Hour</label>
                                        <select name="hour" class="selectize" id="hour" placeholder="Hour" required>
                                            <option value=""></option>
                                            @for($hour = 0; $hour < 24; $hour++)
                                                <option value="{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}"{{ date('H') == str_pad($hour, 2, '0', STR_PAD_LEFT) ? ' selected' : '' }}>
                                                    {{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="date">Minute</label>
                                        <select name="hour" class="selectize" id="hour" placeholder="Min" required>
                                            <option value=""></option>
                                            @for($minute = 0; $minute < 60; $minute++)
                                                <option value="{{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}"{{ date('i') == str_pad($minute, 2, '0', STR_PAD_LEFT) ? ' selected' : '' }}>
                                                    {{ str_pad($minute, 2, '0', STR_PAD_LEFT) }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="priority">Priority</label>
                                <select name="priority" class="selectize" id="priority" placeholder="Priority of task" required>
                                    <option value=""></option>
                                    <option value="1">Low Priority</option>
                                    <option value="2" selected>Normal</option>
                                    <option value="3">High Priority</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="reminder">Remind Me</label>
                                <select name="reminder" class="selectize" id="reminder" placeholder="Trigger of the task" required>
                                    <option value=""></option>
                                    <option value="24" selected>1 day before</option>
                                    <option value="60" selected>1 hour before</option>
                                    <option value="15" selected>15 minutes before</option>
                                    <option value="5" selected>5 minutes before</option>
                                    <option value="once" selected>Once at time</option>
                                    <option value="days">Repeat Select Days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>