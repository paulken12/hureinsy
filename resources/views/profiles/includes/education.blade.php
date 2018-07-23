<input type="hidden" name="key" value="{{empty($education->id) ? '':$education->id}}">

<div class="form-group">
    <label for="course">Course</label>
    <input type="text" id="course" name="course" class="form-control" title="Course"
           value="{{empty($education->course) ? '':$education->course}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="name_of_school">School name</label>
    <input type="text" id="name_of_school" name="name_of_school" class="form-control"
           title="School name" value="{{empty($education->name_of_school) ? '':$education->name_of_school}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="year_graduated">Year graduated</label>
    <input type="text" id="year_graduated" name="year_graduated" class="form-control"
           title="Year graduated" value="{{empty($education->year_graduated) ? '':$education->year_graduated}}" {{empty($basicInfo) ? '':"disabled"}}>
</div>

<div class="form-group">
    <label for="award">Awards</label>
    <textarea class="form-control" name="award" id="award" cols="30"
              rows="5" {{empty($basicInfo) ? '':"disabled"}}>{{empty($education->award) ? '':$education->award}}</textarea>
</div>
