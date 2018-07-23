<input type="hidden" name="key" value="{{empty($criminalInfo->id) ? '':$criminalInfo->id}}">

<div class="form-group">
    <label for="has_crime">Crime committed</label>
    <input type="text" id="has_crime" name="has_crime" class="form-control"
           title="Crime committed" value="{{empty($criminalInfo->has_crime) ? '':$criminalInfo->has_crime}}">
</div>

<div class="form-group">
    <label for="comment">Comment</label>
    <textarea class="form-control" name="comment" id="comment" cols="30" rows="5">{{empty($criminalInfo->comment) ? '':$criminalInfo->comment}}</textarea>
</div>
