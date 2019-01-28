@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-sm-6 col-lg-5">
        <div class="overview-item overview-item--c1">
            <a href="{{route("ParticipantList")}}">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2><i class="fas fa-users"></i></h2>
                        <h2>Participants</h2>
                    </div>
                </div>
                <div class="overview-chart">
                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                            
                        </div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="widgetChart1" height="130" width="166" class="chartjs-render-monitor" style="display: block;"></canvas>
                </div>
            </div>
            </a>
        </div>
    </div>

    <div class="col-sm-6 col-lg-5">
        <div class="overview-item overview-item--c1">
        <a href="{{route("ParticipantList")}}">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2><i class="fas fa-calendar-week"></i></h2>
                    <h2>Trainings   </h2>
                </div>
            </div>
            <div class="overview-chart">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        
                    </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas id="widgetChart1" height="130" width="166" class="chartjs-render-monitor" style="display: block;"></canvas>
            </div>
        </div>
        </a>
        </div>
    </div>

    <div class="col-sm-6 col-lg-5">
        <div class="overview-item overview-item--c1">
        <a href="{{route("ResourcePersonList")}}">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2><i class="fas fa-calendar-week"></i></h2>
                    <h2>Resource Person   </h2>
                </div>
            </div>
            <div class="overview-chart">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        
                    </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas id="widgetChart1" height="130" width="166" class="chartjs-render-monitor" style="display: block;"></canvas>
            </div>
        </div>
        </a>
        </div>
    </div>
    <div class="col-sm-6 col-lg-5">
        <div class="overview-item overview-item--c1">
        <a href="{{route("UserAdd")}}">
        <div class="overview__inner">
            <div class="overview-box clearfix">
                <div class="icon">
                    <i class="zmdi zmdi-account-o"></i>
                </div>
                <div class="text">
                    <h2><i class="fas fa-calendar-week"></i></h2>
                    <h2> All User List  </h2>
                </div>
            </div>
            <div class="overview-chart">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                    <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                        
                    </div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas id="widgetChart1" height="130" width="166" class="chartjs-render-monitor" style="display: block;"></canvas>
            </div>
        </div>
        </a>
        </div>
    </div>
</div>
@endsection