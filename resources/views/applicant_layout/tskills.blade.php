<div >
    <div class="row resume-container" >
        <div class="col-lg-12">
              <div class='col-lg-12 form_title space bg'>
                  Technical Skills
             </div>
             <!--lang-->
             <div class="col-lg-12">
                 <div class="col-sm-12" >
                     <label for="fname" class="control-label col-sm-3">Languages:</label>
                     <div class="col-sm-9 " @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_lang" @endif>
                         <span @if(Auth::user()->admin==0) class="pointer" id="lang" onClick='open_container(this.id)'" @endif>
                            <span >
                             @if($user->lang != NULL)

                                <?php $separator=",";
                                foreach($user->lang as $lang){
                                    echo $lang['lang_desc'].", ";
                                    $selected_lang[]=$lang['id'];
                                }
                                ?>
                             @endif
                             </span>
                             <span class="icon-edit invi edit_lang "></span>
                          </span>
                     </div>
                     @if(Auth::user()->admin==0)
                     <div class="col-sm-9 invi" id="lang_opt" >
                         {!!
                         Form::open(['method'=>'PATCH','route'=>['user_profile.update',$user->pinfo['user_id']]]) !!}
                         @include('partials.lang_form')

                         <div class="col-lg-12" style="padding-bottom:20px">
                             <br/>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::button('Cancel', array('id' => 'cancel_lang', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                             </div>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_lang')) !!}
                             </div>

                         </div>

                         {!!Form::close()!!}
                     </div>
                     @endif

                 </div>

             </div>
             <!--os-->
             <div class="col-lg-12">
                 <div class="col-sm-12" >
                     <label for="fname" class="control-label col-sm-3">Operating System:</label>
                     <div class="col-sm-9 " @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_os" @endif>
                         <span @if(Auth::user()->admin==0) class="pointer" id="os" onClick='open_container(this.id)'" @endif>
                            <span >
                             @if($user->os != NULL)

                                <?php $separator=",";
                                foreach($user->os as $os){
                                    echo $os['os_desc'].", ";
                                    $selected_os[]=$os['id'];
                                }
                                ?>
                             @endif
                             </span>
                             <span class="icon-edit invi edit_os "></span>
                          </span>
                     </div>
                     @if(Auth::user()->admin==0)
                     <div class="col-sm-9 invi" id="os_opt" >
                         {!!
                         Form::open(['method'=>'PATCH','route'=>['user_profile.update', $user->pinfo['user_id']]]) !!}
                         @include('partials.os_form')

                         <div class="col-lg-12" style="padding-bottom:20px">
                             <br/>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::button('Cancel', array('id' => 'cancel_os', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                             </div>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_os')) !!}
                             </div>

                         </div>

                         {!!Form::close()!!}
                     </div>
                     @endif
                 </div>
             </div>
             <!--fwork-->
             <div class="col-lg-12">
                 <div class="col-sm-12" >
                     <label for="fname" class="control-label col-sm-3">fworkuages:</label>
                     <div class="col-sm-9 " @if(Auth::user()->admin==0) onmouseout="edit_mouseOut(this.id)" onmouseover="edit_mouseOver(this.id)" id="edit_fwork" @endif>
                         <span @if(Auth::user()->admin==0) class="pointer" id="fwork" onClick='open_container(this.id)'" @endif>
                            <span >
                             @if($user->fwork != NULL)

                                <?php $separator=",";
                                foreach($user->fwork as $fwork){
                                    echo $fwork['fwork_desc'].", ";
                                    $selected_fwork[]=$fwork['id'];
                                }
                                ?>
                             @endif
                             </span>
                             <span class="icon-edit invi edit_fwork "></span>
                          </span>
                     </div>
                     @if(Auth::user()->admin==0)
                     <div class="col-sm-9 invi" id="fwork_opt" >
                         {!!
                         Form::open(['method'=>'PATCH','route'=>['user_profile.update', $user->pinfo['user_id']]]) !!}
                         @include('partials.fwork_form')

                         <div class="col-lg-12" style="padding-bottom:20px">
                             <br/>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::button('Cancel', array('id' => 'cancel_fwork', 'class' => 'btn btn-primary btn-block','onclick'=>'cancel(this.id)')) !!}
                             </div>
                             <div class="col-lg-4 pull-right ">
                                 {!!Form::submit('Save', array('id' => 'save', 'class' => 'btn btn-primary btn-block', 'name'=>'update_fwork')) !!}
                             </div>

                         </div>

                         {!!Form::close()!!}
                     </div>
                     @endif
                 </div>
             </div>
        </div>
    </div>
    @if(Auth::user()->admin==0)
    <div class="row" style="margin-bottom:10px">
        <div class="col-lg-4 col-md-4 col-sm-4" style="padding:0px">
        {!!Form::button('Add languages', array('id' => 'lang', 'onClick'=>'open_container(this.id)', 'class' => 'btn btn-primary btn-block'))!!}
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="padding:0px">
        {!!Form::button('Add operating system', array('id' => 'os', 'onClick'=>'open_container(this.id)', 'class' => 'btn btn-primary btn-block'))!!}
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4" style="padding:0px">
        {!!Form::button('Add framework', array('id' => 'fwork', 'onClick'=>'open_container(this.id)', 'class' => 'btn btn-primary btn-block'))!!}
    </div>
    </div>
    @endif
</div>
