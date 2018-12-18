<!-- alluser.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Follow Unfollow Functionality Tutorial With Example</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Laravel Follow Unfollow Functionality Tutorial With Example</h2>
    <br>
    <div class="row pl-4">
        @foreach($users as $user)
            @if(auth()->user()->id !== $user->id)
                <div class="card" style="width:250px">
                    <img class="card-img-top" src="/images/avatar.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">{{ $user->name }}</h4>
                        <p class="mb-2">
                            <small>Following: <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></small>
                            <small>Followers: <span class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></small>
                        </p>
                        <button class="btn btn-info follow"  data-id="{{ $user->id }}">
                            <strong>
                                @if(auth()->user()->isFollowing($user))
                                    UnFollow
                                @else
                                    Follow
                                @endif
                            </strong>
                        </button>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
</body>
</html>