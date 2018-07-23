<input type="hidden" name="key" value="{{empty($training->id) ? '':$training->id}}">

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" class="form-control" title="Title" value="{{empty($training->title) ? '':$training->title}}">
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="date_from">Date from</label>
            <input type="text" id="date_from" name="date_from" class="form-control"
                   title="Date from" value="{{empty($training->date_from) ? '':$training->date_from}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="date_to">Date to</label>
            <input type="text" id="date_to" name="date_to" class="form-control" title="Date to" value="{{empty($training->date_to) ? '':$training->date_to}}">
        </div>
    </div>
</div>



<div class="form-group">
    <label for="place_seminar">Location</label>
    <input type="text" id="place_seminar" name="place_seminar" class="form-control"
           title="Location" value="{{empty($training->place_seminar) ? '':$training->place_seminar}}">
</div>
