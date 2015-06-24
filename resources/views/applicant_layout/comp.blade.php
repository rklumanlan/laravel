<div>
    <div class="row" id="comp_view" style="background-color: #eff0f2;padding-top:30px; padding-bottom:30px; margin-bottom:10px " onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)">
        <div class="col-lg-12">
             <div class='col-lg-12 form_title space bg'>
                 Professional Experience
             </div>
             @if(Request::is('user_profile/position/create'))
             <div class="col-lg-12" id="addform">
                 {!!
                 Form::open(['method'=>'POST','route'=>['user_profile.position.store']]) !!}
                 @include('partials.comp_form')

                 <div class="col-lg-12">
                     <div class="col-lg-2 pull-right ">
                         {!!Form::button('Cancel', array('id' => 'cancel_add_comp', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                     </div>
                     <div class="col-lg-2 pull-right ">
                         {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'add_comp')) !!}
                     </div>

                 </div>
                 {!!Form::close()!!}
             </div>
             @endif
                 @foreach($user->comp as $comp)

                 <div class="col-lg-12 comp1 space">
                     <div class="col-lg-12" id="comp">
                         @if($comp['compname'] != NULL)
                         <div class="col-sm-12" onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_comp">
                             @if(Auth::user()->admin==0)
                             <a href="{!! URL::route('user_profile.position.edit', $comp['comp_id']) !!}">
                             <span class="pointer" id="comp" onClick='open_container(this.id)'>
                                <span >{!!$comp['compname']!!}</span>
                              <span class="icon-edit invi edit_comp "></span>
                            </span>
                            </a>
                            @else
                            <span >{!!$comp['compname']!!}</span>

                            @endif

                         </div>
                         @endif
                         @if($comp->title != NULL)
                         <div class="col-sm-12" onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_comp">
                             @if(Auth::user()->admin==0)
                             <a href="{!! URL::route('user_profile.position.edit', $comp['comp_id']) !!}">
                             <span class="pointer" id="comp" onClick='open_container(this.id)'>
                                <span >{!!$comp['title']!!}</span>
                              <span class="icon-edit invi edit_comp "></span>
                            </span>
                            </a>
                            @else
                            <span >{!!$comp['title']!!}</span>
                            @endif
                         </div>
                         @endif
                         @if($comp['mon1'] !=NULL || $comp['cyear1'] !=NULL || $comp['mon2'] !=NULL || $comp['cyear2'] !=NULL)
                         <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_comp">
                             @if(Auth::user()->admin==0)
                             <a href="{!! URL::route('user_profile.position.edit', $comp['comp_id']) !!}">
                             <span class="pointer" id="comp" onClick='open_container(this.id)'>
                                <span >
                                    <?php mon($comp['mon1']);
                                    echo " ".$comp['cyear1']." - ";
                                    mon($comp['mon2']);
                                    echo " ".$comp['cyear2'];
                                    ?>
                                </span>
                              <span class="icon-edit invi edit_comp "></span>
                            </span>
                            </a>
                            @else
                            <span >
                                <?php mon($comp['mon1']);
                                echo " ".$comp['cyear1']." - ";
                                mon($comp['mon2']);
                                echo " ".$comp['cyear2'];
                                ?>

                            </span>
                            @endif
                         </div>
                         @endif
                         @if($comp['location'] != NULL)
                         <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_comp">
                             @if(Auth::user()->admin==0)
                             <a href="{!! URL::route('user_profile.position.edit', $comp['comp_id']) !!}">
                             <span class="pointer" id="comp" onClick='open_container(this.id)'>
                                <span >
                              {!!$comp['location']!!}</span>
                              <span class="icon-edit invi edit_comp "></span>
                            </span>
                            </a>
                            @else
                            <span >{!!$comp['location']!!}</span>
                            @endif
                         </div>
                         @endif
                         @if($comp['compdesc'] !=NULL)
                         <div class="col-sm-12"  onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_comp">
                             @if(Auth::user()->admin==0)
                             <a href="{!! URL::route('user_profile.position.edit', $comp['comp_id']) !!}">
                             <span class="pointer" id="comp" onClick="open_container(this.id)">
                                <span >{!!$comp['compdesc']!!}</span>
                              <span class="icon-edit invi edit_comp "></span>
                             </span>
                             </a>

                             @else
                             <span >{!!$comp['compdesc']!!}</span>
                             @endif
                         </div>
                         @endif
                     </div>
                 </div>
                 @endforeach

        </div>
    </div>
    @if(Auth::user()->admin==0)
    <div class="row" style="margin-bottom:10px"><a href="{!! URL::route('user_profile.position.create') !!}"><button type="button" class="btn btn-primary btn-block">Add Position</button></a>
    </div>


        @if($comp2 != NULL)
        <div class="panel panel-info" id="editform" >
            <div class="panel-heading">
                <div class="panel-title">
                      Professional Experience
                </div>
            </div>
            <div style="padding-top:30px" class="panel-body form-horizontal" >
            {!!
            Form::model($comp2,['method'=>'PATCH','route'=>['user_profile.position.update',$comp2->comp_id]]) !!}
            @include('partials.comp_form')


                <div class="col-lg-12">
                    <br/>
                    <div class="col-lg-8 col-lg-offset-4">
                        <div class="col-lg-4">
                            {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_comp')) !!}
                            {!!Form::close()!!}
                        </div>
                        <div class="col-lg-4">
                            {!!Form::button('Cancel', array('id' => 'cancel_educ', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                        </div>
                        <div class="col-lg-4">
                            {!! Form::open(array('route' => array('user_profile.position.destroy', $comp2->comp_id), 'method' => 'delete')) !!}
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
<?php
function mon($mon){
    switch ($mon) {

        case '1':
            echo 'Januray';
            break;
        case '2':
            echo 'February';
            break;
        case '3':
            echo 'March';
            break;
        case '4':
            echo 'April';
            break;
        case '5':
            echo 'May';
            break;
        case '6':
            echo 'June';
            break;
        case '6':
            echo 'July';
            break;
        case '8':
            echo 'August';
            break;
        case '9':
            echo 'September';
            break;
        case '10':
            echo 'October';
            break;
        case '11':
            echo 'November';
            break;
        case '12':
            echo 'December';
            break;
        default:
            # code...
            break;
    }
}


?>
