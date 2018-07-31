@if(!empty($training->id))
    <input type="hidden" name="train_key[]" value="{{empty($training->id) ? '':$training->id}}">
@endif

<div class="form-group">
    <label for="train_title">Title</label>
    <input type="text" id="train_title" name="train_title[]" class="form-control" title="Title"
           value="{{empty($training->title) ? '':$training->title}}">
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="train_date_from">Date from</label>
            <input type="text" id="train_date_from" name="train_date_from[]" class="form-control"
                   title="Date from" value="{{empty($training->date_from) ? '':$training->date_from}}">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label for="train_date_to">Date to</label>
            <input type="text" id="train_date_to" name="train_date_to[]" class="form-control" title="Date to"
                   value="{{empty($training->date_to) ? '':$training->date_to}}">
        </div>
    </div>
</div>


<div class="form-group">
    <label for="train_place_seminar">Location</label>
    <input type="text" id="train_place_seminar" name="train_place_seminar[]" class="form-control"
           title="Location" value="{{empty($training->place_seminar) ? '':$training->place_seminar}}">
</div>
