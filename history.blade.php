@extends('layouts.app')
@section('content')
<div class="container-fluid app-body">
    <h3>Recent Posts Sent To Buffer</h3>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover social-accounts"> 
                <thead> 
                    <tr>
                        <th>Group Name</th>
                        <th>Group Type</th>
                        <th>Account Name</th>
                        <th>Posted text</th>
                        <th>Time</th>
                    </tr> 
                </thead> 
                <tbody> 
                    @foreach ($buffer_posts_details as $profile)
                    <tr>
                        <td>
                            <b>{{$profile->group_info->name}}</b>
                        </td>
                        <td>
                            {{$profile->group_info->type}}
                        </td>
                        <td>
                            <div class="media">
                                <div class="media-left">
                                    <a href="">
                                        <span class="fa fa-{{$profile->account_info->type}}"></span>
                                        <img width="50" class="media-object img-circle" src="{{$profile->account_info->avatar}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </td> 
                        <td>
                            {{$profile->post_text}}
                        </td>
                        <td>
                            {{$profile->sent_at}}
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
            </table>
            {{$paginate->links()}}
        </div>
    </div>
</div>
@endsection
