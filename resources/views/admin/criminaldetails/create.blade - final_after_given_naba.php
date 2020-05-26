@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

<form method="POST" action="http://localhost/cidwb/public/cidadmin/criminaldetails" accept-charset="UTF-8" id="form-with-validation" class="form-horizontal" enctype="multipart/form-data">
<input name="_token" type="hidden" value="20g0K4g110DdvwOAtipP9xqudoQipxZkl2srprHu">


<div>
    <h2>Add Criminal Details</h2>
</div>

<div id="tabs">
    <ul>
        <!--<div id="tabs">Add Criminals Details</div>-->
        <li><a href="#tabs-1">Basic Details</a></li>
        <li><a href="#tabs-2">Contact Details</a></li>
        <li><a href="#tabs-3">Crime Details</a></li>
    </ul>
    <div id="tabs-1">
        <div class="form-group">
            <label for="namfst" class="col-sm-2 control-label">Criminal&#039;s Name*</label>
            <div class="col-sm-4">
                <input class="form-control" name="namfst" type="text" id="namfst" placeholder="First Name">         
            </div>
            <div class="col-sm-3">
                <input class="form-control" name="nammddl" type="text" id="nammddl" placeholder="Middle Name">          
            </div>
            <div class="col-sm-3">
                <input class="form-control" name="namlst" type="text" id="namlst" placeholder="Last Name">          
            </div>
        </div>
        
        <div class="form-group">
            <label for="namalis" class="col-sm-2 control-label">Alias Name*</label>
            <div class="col-sm-7">
                <input class="form-control" name="namalis" type="text" id="namalis" placeholder="Alias Name">               
            </div>
        </div>
        <div class="form-group">
            <label for="dbrth" class="col-sm-2 control-label">Date Of Birth</label>
            <div class="col-sm-3">
                <input class="form-control datepicker" name="dbrth" type="text" id="dbrth" placeholder="Date Of Birth">             
            </div>
            
            <label for="agee" class="col-sm-2 control-label">Age</label>
            <div class="col-sm-1">
                <input class="form-control" name="agee" type="text" id="agee" placeholder="Age">                
            </div>
            
            <label for="agee" class="col-sm-2 control-label">Gender*</label>
            <div class="col-sm-2">
                <!--<input class="form-control" name="gend" type="text" id="gend">  -->         
                <select name="gend" id="gend" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Father&#039;s Name</label>
            <div class="col-sm-4">
                <input class="form-control" name="ffstname" type="text" id="ffstname" placeholder="First Name">             
            </div>
            <div class="col-sm-3">
                <input class="form-control" name="fmstname" type="text" id="fmstname" placeholder="Middle Name">        
            </div>
            <div class="col-sm-3">
                <input class="form-control" name="flstname" type="text" id="flstname" placeholder="Last Name">        
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Criminal Photograph</label>
            <div class="col-sm-4">
                <input name="lsidefce" type="file" id="lsidefce">
                <p class="help-block">Left Side Face</p>            
            </div>
            <div class="col-sm-3">
                <input name="fsidefce" type="file" id="fsidefce">
                <p class="help-block">Front Side Face</p>        
            </div>
            <div class="col-sm-3">
                <input name="rsidefce" type="file" id="rsidefce">
                <p class="help-block">Right Side Face</p>        
            </div>
        </div>
        
        
    </div>
    <div id="tabs-2">
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Permanent Address:</strong></label>
        </div>  
        <div class="form-group">
            <label for="peradd" class="col-sm-2 control-label">Permanent Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="peradd" cols="50" rows="3" id="peradd" placeholder="Permanent Address"></textarea>             
            </div>          
        </div>      
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Select State</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="perstat" type="text" id="perstat">    -->
                <select name="perstat" id="perstat" class="form-control">
                    <option value="">--Please Select--</option>
                </select>   
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Pin Code</label>
            <div class="col-sm-4">
                <input class="form-control" name="perpin" type="text" id="perpin" placeholder="Pin Code">           
            </div>
        </div>
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Select District</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="perdis" type="text" id="perdis">-->
                <select name="perdis" id="perdis" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Select Police Station</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="perpsta" type="text" id="perpsta">-->
                <select name="perpsta" id="perpsta" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Present Address:</strong></label>
        </div>  
        <div class="form-group">
            <label for="peradd" class="col-sm-2 control-label">Present Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="preadd" cols="50" rows="3" id="preadd" placeholder="Present Address"></textarea>               
            </div>          
        </div>      
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Select State</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="prestat" type="text" id="prestat">    -->
                <select name="prestat" id="prestat" class="form-control">
                    <option value="">--Please Select--</option>
                </select>   
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Pin Code</label>
            <div class="col-sm-4">
                <input class="form-control" name="prepin" type="text" id="prepin" placeholder="Pin Code">           
            </div>
        </div>
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Select District</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="predis" type="text" id="predis">-->
                <select name="predis" id="predis" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Select Police Station</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="prepsta" type="text" id="prepsta" placeholder="xxx">-->
                <select name="prepsta" id="prepsta" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Contact Number:</strong></label>
        </div>  
                
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Mobile Number</label>
            <div class="col-sm-4">
                <input class="form-control" name="mobi" type="text" id="mobi" placeholder="Mobile Number">      
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Landline Number</label>
            <div class="col-sm-4">
                <input class="form-control" name="lndn" type="text" id="lndn" placeholder="Landline Number">            
            </div>
        </div>
        
    </div>
    
    <div id="tabs-3">
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label"><strong>Crime Information:</strong></label>
        </div>  
        <div class="form-group">
            <label for="peradd" class="col-sm-2 control-label">Crime Details*</label>
            <div class="col-sm-10">
                <textarea class="form-control ckeditor" name="crmdet" cols="50" rows="10" id="crmdet"  placeholder="Crime Details"></textarea>
            </div>          
        </div>      
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Modus Operandi</label>
            <div class="col-sm-4">
                <input class="form-control" name="modoper" type="text" id="modoper" placeholder="Modus Operandi">
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Date Of Crime*</label>
            <div class="col-sm-4">
                <input class="form-control datepicker" name="dofcrm" type="text" id="dofcrm"  placeholder="Date Of Crime">
            </div>
        </div>
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Crime Type</label>
            <div class="col-sm-4">
                <!--<input class="form-control" name="crmtyp" type="text" id="crmtyp" placeholder="xxx">-->
                <select name="crmtyp" id="crmtyp" class="form-control">
                    <option value="">--Please Select--</option>
                </select>
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Operation Area*</label>
            <div class="col-sm-4">
                <input class="form-control" name="opertare" type="text" id="opertare" placeholder="Operation Area">
            </div>
        </div>
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">IR</label>
            <div class="col-sm-4">
                <input class="form-control" name="ir" type="text" id="ir" placeholder="IR">
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Remarks</label>
            <div class="col-sm-4">
                <input class="form-control" name="remrk" type="text" id="remrk" placeholder="Remarks">
            </div>
        </div>
        <div class="form-group">
            <label for="ffstname" class="col-sm-2 control-label">Case Reference*</label>
            <div class="col-sm-4">
                <input class="form-control" name="cseref" type="text" id="cseref" placeholder="Case Reference">
            </div>
            <label for="ffstname" class="col-sm-2 control-label">Announcement of Reward</label>
            <div class="col-sm-4">
                <input class="form-control" name="rewann" type="text" id="rewann" placeholder="Announcement of Reward">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input class="btn btn-primary" type="submit" value="Create">
            </div>
        </div>
    </div>
    
</div>
<input type="button" id="btnPrevious" value="Previous" style = "display:none"/>
<input type="button" id="btnNext" value="Next" />

</form>
  


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script type="text/javascript" src="http://code.jquery.com/ui/1.8.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.3/themes/base/jquery-ui.css" />
 <script type="text/javascript">
    var currentTab = 0;
    $(function () {
        $("#tabs").tabs({
            select: function (e, i) {
                currentTab = i.index;
                
            }
        });
    });
    $("#btnNext").live("click", function () {
        var tabs = $('#tabs').tabs();
        var c = $('#tabs').tabs("length");
        currentTab = currentTab == (c - 1) ? currentTab : (currentTab + 1);
        tabs.tabs('select', currentTab);
        $("#btnPrevious").show();
        if (currentTab == (c - 1)) {
            $("#btnNext").hide();
        } else {
            $("#btnNext").show();
        }
    });
    $("#btnPrevious").live("click", function () {
        var tabs = $('#tabs').tabs();
        var c = $('#tabs').tabs("length");
        currentTab = currentTab == 0 ? currentTab : (currentTab - 1);
        tabs.tabs('select', currentTab);
        if (currentTab == 0) {
            $("#btnNext").show();
            $("#btnPrevious").hide();
        }
        if (currentTab < (c - 1)) {
            $("#btnNext").show();
        }
    });
</script>
@endsection