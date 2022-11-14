<?php $__env->startSection('content'); ?>
<div id="main-wrapper">
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="./images/logo.png" alt="">
            <img class="logo-compact" src="./images/logo-text.png" alt="">
            <img class="brand-title" src="./images/logo-text.png" alt="">
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="search_bar dropdown">
                            <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                <i class="mdi mdi-magnify"></i>
                            </span>
                            <div class="dropdown-menu p-0 m-0">
                                <form>
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <?php if(Auth::user()->role=='super'): ?>
                        <li class="nav-item dropdown ">
                            <a class="nav-link" href="<?php echo e(route('admin')); ?>" role="button" >
                                <i class="mdi mdi-bell"></i>
                                <div class="pulse-css"></div>
                                To admin
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i>
                                    <span class="ml-2">Logout </span>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="" style="color:black">
        <div class="container-fluid" style="margin-top:80px;">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi <?php echo e(Auth::user()->name); ?>, welcome back!</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Search Filters</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row filters">
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Group" name="Group">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Institution Type" name="Institution Type">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Institution Name" name="Institution Name">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="City" name="City">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="State" name="State">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Distance" name="Distance">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Course Availability" name="Course Availability">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Course Name" name="Course Name">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Fee" name="fee">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Living Expences" name="Living Expences">
                                    </div>
                                    
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Fund to Show" name="Fund to Show">
                                    </div>
                                    
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="INR" name="INR">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="scholarship" name="scholarship">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="SAT" name="SAT">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="ACT" name="ACT">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="GRE" name="GRE">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="GMAT" name="GMAT">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="IELTS" name="IELTS">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="TOEFL" name="TOEFL">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="PTE" name="PTE">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Duolingo" name="Duolingo">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Without EPT" name="Without EPT">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Percentage" name="Percentage">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Intake" name="Intake">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="GAP Accepted" name="GAP Accepted">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="WES" name="WES">
                                    </div>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Current Deadline" name="Current Deadline">
                                    </div>
                                    <?php if(Auth::user()->role=='super'): ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Document Requirement" name="Document Requirement">
                                    </div>
                                    <?php endif; ?>
                                    <div class="col-md-2" style="margin-top:5px; margin-bottom:5px">
                                        <input type="text" class="form-control" placeholder="Application Fee" name="Application Fee">
                                    </div>
                                    <button  class="btn btn-primary col-md-2 offset-md-10 find_data">Find</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Search Result</h4>
                        </div>
                        <div class="card-body row">
                            <div class="card text-center col-md 9">
                                <div class="card-body">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home1">Thumbnail</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile1">List</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" >
                                            <div class="tab-pane fade show active" id="home1" role="tabpanel" style="padding:5px">
                                                <div class="row thumbnail" style="max-height:500px; overflow-y:auto;">
                                                    
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="profile1">
                                                <div class="table-responsive" style="max-height:500px; overflow-y:auto;">
                                                    <table class="display table" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Logo</th>
                                                                <th>Course Name</th>
                                                                <th>Institution Name</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>Rank</th>
                                                                <th>scholarship</th>
                                                                <th>Document Requirement</th>
                                                                <th>Comment</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="card col-md-3">
                                <div class="card-header">
                                    <h4 class="card-title">Data in details</h4>
                                </div>
                                <div class="card-body detail-info" style="max-height:500px; overflow-y:auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card col-md-3 card-template" style="display:none">
    <img class="card-img-top img-fluid" src="./images/card/2.png" alt="Card image cap">
    <div class="card-header" style="display:block">
        <h5 class="card-title c_name">Geography</h5>
        <h6 class="card-title i_name" >Oxford University</h6>                   
    </div>
    
    <div class="card-body">
        <div class="row" style="color:black">
            <p class="card-text col-md-6 city">City:
            </p>
            <p class="card-text col-md-6 state">State:
            </p>
            <p class="card-text col-md-6 rank">Rank:
            </p>
            <p class="card-text col-md-6 schship">scholarship:
            </p>
            <p class="card-text col-md-12 d_req">Document req.:
            </p>
        </div>
        <div class="row comment" >

        </div>
        
    </div>
    <div class="card-footer">
        <button class="btn btn-dark btn-card float-left">View more...</button>
        <a href="javascript:void()" class="card-link float-right weblink">Web link</a>
    </div>
</div>
<table style="display:none; color:black" >
    <thead></thead>
    <tbody><tr class="row-template">
    <td class="logo"></td>
    <td class="c_name"></td>
    <td class="i_name"></td>
    <td class="city"></td>
    <td class="state"></td>
    <td class="rank"></td>
    <td class="scholarship"></td>
    <td class="d_req"></td>
    <td class="comment"></td>
    <td class="action">
    <button class="btn btn-dark btn-card ">View more...</button>
        <a href="javascript:void()" class="card-link  weblink">Web link</a>
    </td>
</tr></tbody>
</table>
<div class="row detail-template" style='display:none;color:black;border-bottom: 1px solid blue;'>
    <div class="col-md-4 col-name" style="color:blue"></div>
    <div class="col-md-8 data-value"></div>
</div>

<script>
    function viewDetail(id)
    {
        console.log(id);
        var url = "<?php echo e(url('/home/detail/:id')); ?>";
        url = url.replace(':id', id);
        console.log(url);
        $.ajax({
            url:url,
                method:'get',
                success:function(result)
                {
                    // console.log(result[0][0]['id']);
                    $('.detail-info').empty();
                    result[1].forEach(function(item){
                        var temp=$(".detail-template").clone();
                        temp.removeClass('detail-template');
                        temp.css('display','');
                        temp.find('.col-name').text(item+":");
                        temp.find('.data-value').text(result[0][0][item]);
                        $(".detail-info").append(temp);

                    })

                },
                error:function(err)
                {
                    console.log(err);
                }
        })
    }
    $(document).ready(function()
    {
        $(".find_data").click(function(){
            let data=[];
            $('.filters').find('input').each(function()
            {
                if($(this).val()!="")
                {  
                    let filter=[];
                    filter.push($(this).attr('name'));
                    filter.push("like");
                    filter.push($(this).val());
                    data.push(filter);
                }
            });
            jQuery.ajax({
                url: "<?php echo e(url('/home/search')); ?>",
                method: 'post',
                data: {
                    data,
                    _token : $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result){
                    $('.thumbnail').empty();
                    $('.list').empty();
                    console.log(result);
                    result.forEach(function(item){
                        let temp=$(".card-template").clone();
                        let temp_r=$('tr.row-template').clone();
                        console.log(temp_r);
                        temp.removeClass('card-template');
                        temp_r.removeClass('row-template');
                        temp.css('display',"");
                        temp_r.css('display',"");
                        temp_r.find('.c_name').text(item['Course Name']);
                        temp.find('.c_name').text(item['Course Name']);
                        temp_r.find('.i_name').text(item['Institution Name']);
                        temp.find('.i_name').text(item['Institution Name']);
                        temp_r.find(".city").append("<span style='color:blue;'>"+item['City']+"</span>");
                        temp.find(".city").append("<span style='color:blue;'>"+item['City']+"</span>");
                        temp_r.find(".state").append("<span style='color:blue;'>"+item['State']+"</span>");
                        temp.find(".state").append("<span style='color:blue;'>"+item['State']+"</span>");
                        temp_r.find(".rank").append("<span style='color:blue;'>"+item['Rank']+"</span>");
                        temp.find(".rank").append("<span style='color:blue;'>"+item['Rank']+"</span>");
                        temp_r.find(".d_req").append("<span style='color:blue;'>"+item['Document Requirement']+"</span>");
                        temp.find(".d_req").append("<span style='color:blue;'>"+item['Document Requirement']+"</span>");
                        temp_r.find(".scholarship").append("<span style='color:blue;'>"+item['Scholarship']+"</span>");
                        temp.find(".schship").append("<span style='color:blue;'>"+item['Scholarship']+"</span>");
                        temp_r.find(".comment").text(item["Comment"]);
                        temp.find(".comment").text(item["Comment"]);
                        temp_r.find(".btn-card").attr('onclick',"viewDetail("+item['id']+")");
                        temp.find(".btn-card").attr('onclick',"viewDetail("+item['id']+")");
                        temp_r.find(".weblink").text(item["Web Link"]);
                        temp.find(".weblink").text(item["Web Link"]);
                        temp_r.find(".weblink").attr('href',item["Web Link"]);
                        temp.find(".weblink").attr('href',item["Web Link"]);
                        $('.thumbnail').append(temp);
                        $('.list').append(temp_r);
                    });
                    
                },
                error:function(err)
                {
                    console.log(err);
                }
            });
            console.log(data);
        })
        
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js_css'); ?>
<link href="<?php echo e(asset('css/focus/style.css')); ?>" rel="stylesheet">
<script src="<?php echo e(asset('vendor/global/global.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/focus/quixnav-init.js')); ?>"></script>
    <script src="<?php echo e(asset('js/focus/custom.min.js')); ?>"></script>
    <link href="<?php echo e(asset('css/focus/style.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\task\Laravel\pdbms\pdms\resources\views/home.blade.php ENDPATH**/ ?>