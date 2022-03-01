
{{-- @dd($message); --}}
@foreach($message as $msg)

@if($msg->type == 'join')
    <li class="text-center text-dark w-lg-50ml-lg-auto mr-lg-auto mb-2">
        <div class="bg_time p-1">
            <span class="text-success font-weight-bold">{{$msg->user->username}} :</span>
            Joined
            the Group Chat ({{$msg->created_at}})
        </div>

    </li>

 
@else

    @if($msg->user_id==Auth::user()->id)
        <li class="my-chat mb-4   text-end message{{$msg->id}}">
            <div class="chat-hour">
                <div class="icons">

                    <a style="cursor:pointer;" class=""><i
                            class="fa fa-trash delete"
                            message="{{$msg->id}}"></i></a>
                </div>
            </div>
            <div class="chat-text">
                <span class="orange">{{$msg->user->name}} : </span>{{$msg->message}} 
                <div class="chat-details">{{$msg->created_at}}</div>   
                    
            </div>
            <div class="chat-avatar">
                <img
                    src="{{asset('upload/profile/'.$msg->user->profile.'')}}"
                    alt="Retail Admin">
                <!-- <div class="chat-name">Sam</div> -->
            </div>
        </li>
    @else
        <li class="your-chat mb-3">
            <div class="chat-avatar">
                <img
                    src="{{asset('upload/profile/'.$msg->user->profile.'')}}"
                    alt="Retail Admin">
                <!-- <div class="chat-name">Russell</div> -->
            </div>
            <div class="chat-text"><span
                    class="purple">{{$msg->user->name}} :</span> {{$msg->message}}
                    <div class="chat-details">
                    {{$msg->created_at}}
                    </div>
            </div>
            <div class="chat-hour">
                <div class="icons ">
                    <a href="#"><i class="fa fa-flag"></i></a>
                    <!-- <a href="#" class="ml-2"><i class="fas fa-reply"></i></a> -->
                    <a style="cursor: pointer" class="ml-2"><i
                            class="far  {{count($msg->likeuser)>=1 ? 'fa-thumbs-down' : 'fa-thumbs-up'}} like"
                            status="{{count($msg->likeuser)>=1 ? 'dislike' : 'like'}}"
                            message="{{$msg->id}}"></i></a>
                </div>
                </span>
            </div>
        </li>
    @endif



@endif
@endforeach