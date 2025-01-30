<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
      <!-- Header Section-->
          @include('admin.head')
      <!-- Header Section-->


    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        
       
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="stats-2-block block d-flex">
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                    <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                    <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stats-3-block block d-flex">
                  <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                    </div>
                  </div>
                  <div class="stats-3 d-flex justify-content-between text-center">
                    <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                      <div class="line"></div><small>+246</small>
                    </div>
                    <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                      <div class="line"></div><small>+416</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="drills-chart block">
                  <canvas id="lineChart1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="user-block block text-center">
                  <div class="avatar"><img src=" {{asset('admincss/img/avatar-1.jpg')}} " alt="..." class="img-fluid">
                    <div class="order dashbg-2">1st</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Richard Nevoreski</h3><span>@richardnevo</span></a>
                  <div class="contributions">950 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="{{asset('admincss/img/avatar-4.jpg')}} " alt="..." class="img-fluid">
                    <div class="order dashbg-1">2nd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Samuel Watson</h3><span>@samwatson</span></a>
                  <div class="contributions">772 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>80</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="user-block block text-center">
                  <div class="avatar"><img src=" {{asset('admincss/img/avatar-6.jpg')}}" alt="..." class="img-fluid">
                    <div class="order dashbg-4">3rd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Sebastian Wood</h3><span>@sebastian</span></a>
                  <div class="contributions">620 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>280</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>190</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">4th</div>
                  <div class="avatar"> <img src="{{asset('admincss/img/avatar-1.jpg')}} " alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Tomas Hecktor</strong><span class="d-block">@tomhecktor</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">410 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>110</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>200</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>100</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">5th</div>
                  <div class="avatar"> <img src=" {{asset('admincss/img/avatar-2.jpg')}} " alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alexander Shelby</strong><span class="d-block">@alexshelby</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">320 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>120</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">                   
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">6th</div>
                  <div class="avatar"> <img src=" {{asset('admincss/img/avatar-6.jpg')}} " alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Arther Kooper</strong><span class="d-block">@artherkooper</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">170 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
 
       
      
      @include('admin.foot')
      </div>
    </div>
    <!-- JavaScript files-->
  @include('admin.scripts')
  </body>
</html>