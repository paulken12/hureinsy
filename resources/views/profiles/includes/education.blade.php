
@if(!empty($education->id))
    <input type="hidden" name="edu_key[]" value="{{empty($education->id) ? '':$education->id}}">
@endif

<div class="form-group">
    <label for="edu_course">Course</label>
    <input type="text" id="edu_course" name="edu_course[]" class="form-control" title="Course"
           value="{{empty($education->course) ? '':$education->course}}" >

</div>

<div class="form-group">
    <label for="edu_name_of_school">School name</label>
    <input type="text" id="edu_name_of_school" name="edu_name_of_school[]" class="form-control"
           title="School name" value="{{empty($education->name_of_school) ? '':$education->name_of_school}}" >
</div>

<div class="form-group">
    <label for="edu_year_graduated">Year graduated</label>
    <input type="text" id="edu_year_graduated" name="edu_year_graduated[]" class="form-control"
           title="Year graduated" value="{{empty($education->year_graduated) ? '':$education->year_graduated}}" >
</div>

<div class="form-group">
    <label for="edu_award">Awards</label>
    <textarea class="form-control" name="edu_award[]" id="edu_award" cols="30"
              rows="5" >{{empty($education->award) ? '':$education->award}}</textarea>
</div>
