<input type="hidden" value="{{$giftenor->next}}" id="next">
@foreach($giftenor->results as $gift)

    <div class="col-3 mt-2">
        <img src="{{$gift->media[0]->gif->url}}" style="width: 100%;height: 150px"
             gifid="{{$gift->media[0]->gif->url}}" type="tenor" class="img-fluid gifupload"/>
    </div>
@endforeach
