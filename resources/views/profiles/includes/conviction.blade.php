<input type="hidden" name="crime_key" value="{{empty($criminalInfo->id) ? '':$criminalInfo->id}}">

<div class="form-group">
    <label for="crime_has_crime">Crime committed</label>
    <input type="text" id="crime_has_crime" name="crime_has_crime" class="form-control"
           title="Crime committed" value="{{empty($criminalInfo->has_crime) ? '':$criminalInfo->has_crime}}">
</div>

<div class="form-group">
    <label for="crime_comment">Comment</label>
    <textarea class="form-control" name="crime_comment" id="crime_comment" cols="30" rows="5">{{empty($criminalInfo->comment) ? '':$criminalInfo->comment}}</textarea>
</div>
