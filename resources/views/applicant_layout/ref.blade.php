<div>
    <div class="row resume-container" id="ref_view">
        <div class="col-lg-12">
            <div class='col-lg-12 form_title'>
                Professional Reference
            </div>
            @if(Request::is('user_profile/reference/create'))
            <div class="col-lg-12" id="addform">
                {!!
                Form::open(['method'=>'POST','route'=>['user_profile.reference.store']]) !!}
                @include('partials.ref_form')

                <div class="col-lg-12">
                    <div class="col-lg-2 pull-right ">
                        {!!Form::button('Cancel', array('id' => 'cancel_add_ref', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                    </div>
                    <div class="col-lg-2 pull-right ">
                        {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'add_ref')) !!}
                    </div>

                </div>
                {!!Form::close()!!}
            </div>
            @endif
            @foreach($user->ref as $ref)

            <div class="col-lg-12">
                <div class="col-lg-12" id="ref">
                    <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="ref_view">
                        @if(Auth::user()->admin==0)
                        <a href="{!! URL::route('user_profile.reference.edit', $ref['ref_id']) !!}">
                        <span class="pointer" id="ref" onClick="open_container(this.id)">
                           <span >{!!$ref['refname']!!}</span>
                           <span class="icon-edit invi ref_view "></span>
                        </span>
                        </a>
                        @else
                        <span >{!!$ref['refname']!!}</span>
                        @endif
                    </div>
                    @if($ref['cnum'] !=NULL)
                    <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="ref_view">
                        @if(Auth::user()->admin==0)
                        <a href="{!! URL::route('user_profile.reference.edit', $ref['ref_id']) !!}">
                        <span class="pointer" id="ref" onClick="open_container(this.id)">
                           <span >{!!$ref['cnum']!!}</span>
                           <span class="icon-edit invi ref_view "></span>
                        </span>
                        </a>
                        @else
                        <span >{!!$ref['cnum']!!}</span>
                        @endif
                    </div>
                    @endif
                    @if($ref['email'] !=NULL)
                    <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="ref_view">
                        @if(Auth::user()->admin==0)
                        <a href="{!! URL::route('user_profile.reference.edit', $ref['ref_id']) !!}">
                        <span class="pointer" id="ref" onClick="open_container(this.id)">
                           <span >{!!$ref['email']!!}</span>
                         <span class="icon-edit invi ref_view "></span>
                        </span>
                        </a>
                        @else
                        <span >{!!$ref['email']!!}</span>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
    </div>
    @if(Auth::user()->admin==0)
        <div class="row" style="margin-bottom:10px"><a href="{!! URL::route('user_profile.reference.create') !!}"><button type="button" class="btn btn-primary btn-block">Add Reference</button></a>
        </div>
        @if($ref2 != NULL)
        <div class="panel panel-info" id="editform" tabindex="-1">
            <div class="panel-heading">
                <div class="panel-title">
                      Professional Reference
                </div>
            </div>
            <div style="padding-top:30px" class="panel-body form-horizontal" >
                {!!
                Form::model($ref2,['method'=>'PATCH','route'=>['user_profile.reference.update',$ref2->ref_id]]) !!}
                @include('partials.ref_form')

                <div class="col-lg-12">
                    <br/>
                    <div class="col-lg-8 col-lg-offset-4">
                        <div class="col-lg-4">
                            {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_ref')) !!}
                            {!!Form::close()!!}
                        </div>
                        <div class="col-lg-4">
                            {!!Form::button('Cancel', array('id' => 'cancel_ref', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::open(array('route' => array('user_profile.reference.destroy', $ref2->ref_id), 'method' => 'delete')) !!}
                                <button type="submit" class="btn btn-link">Delete this item</button>
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @endif
    @endif
</div>
