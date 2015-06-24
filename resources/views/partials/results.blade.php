{!!
Form::open(['method'=>'GET','route'=>['admin_dashboard.view']]) !!}
<table class="table table-hover table-condensed">
    <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Name</th>
            <th>Sex</th>
            <th>Age</th>
            <th>Languages</th>
            <th>Osperating Systems</th>
            <th>Frameworks</th>
        </tr>
    </thead>
    <tbody>
        <?php $ctr=($users->currentPage() - 1) * $users->perPage() + 1;; ?>

        @foreach($users as $user)

        @if($user->pinfo['fname'] !="")
        <tr>
            <td>{!!Form::radio('app_no', $user->pinfo['user_id'], false)!!}</td>
            <td><?php  echo $ctr; $ctr++; ?></td>
            <td>{{ $user->pinfo['fname'] }} {{ $user->pinfo['mname'] }} {{ $user->pinfo['lname'] }}</td>
            <td>{{ $user->pinfo['sex'] }}</td>
            <td>{{ $user->pinfo['age']}}</td>
            <td>
                @foreach($user->lang as $lang)
                    {!! $lang['lang_desc']!!},
                @endforeach
            </td>
            <td>
                @foreach($user->os as $os)
                    {!! $os['os_desc']!!},
                @endforeach
            </td>
            <td>
                @foreach($user->fwork as $fwork)
                    {!! $fwork['fwork_desc']!!},
                @endforeach
            </td>

        </tr>
        @endif
        @endforeach

    </tbody>
</table>
<div class="col-lg-12">
    <div class="col-lg-4 col-lg-offset-4">
        {!!Form::submit('View Applicant', array('id' => 'view', 'class' => 'btn btn-primary btn-block')) !!}
    </div>
</div>
<div class="col-lg-12">
    <div class="text-center">
        {!!$users->render()!!}
    </div>
</div>
{!!Form::close()!!}
