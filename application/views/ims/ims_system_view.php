 
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          <div class="row">

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Date
                </div>

                <div class="text value">
                  5/14
                </div>
              </div>


            </div>

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Time
                </div>
                <div class="text value">
                  09:35
                </div>
              </div>

            </div>

            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Running
                </div>
                <div class="text value">
                  1400 h
                </div>
              </div>


            </div>


            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Error
                </div>
                <div class="text value">
                  <i class="remove circle icon"></i> 2
                </div>
              </div>

            </div>
            <div class="col-xs-6 col-sm-2 placeholder">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Warning
                </div>
                <div class="text value">
                  <i class="warning circle icon"></i> 3
                </div>
              </div>

            </div>


            <div class="col-xs-6 col-sm-2 placeholder at-center">

              <div class="ui statistic at-center">
                <div class="label at-center">
                  Info
                </div>
                <div class="text value">
                  <i class="info circle icon"></i> 3
                </div>
              </div>

            </div>

          </div>

          <div class="col-xs-6 col-sm-6 placeholder">

            <h2 class="sub-header">日志纪录</h2>

          </div>

          <div class="col-xs-6 col-sm-6 placeholder">

            <div class="ui searchable floating dropdown labeled icon button" tabindex="0" style="
    float: right;
">
              <i class="filter icon"></i>
              <span class="text">过滤</span>
              <div class="menu" tabindex="-1">
                <div class="header">
                  Filter
                </div>
                <div class="item">
                  <div class="ui red empty circular label"></div>
                  Error
                </div>
                <div class="item">
                  <div class="ui yellow empty circular label"></div>
                  Warning
                </div>
                <div class="item">
                  <div class="ui white empty circular label"></div>
                  Info
                </div>
                <div class="item">
                  <div class="ui green empty circular label"></div>
                  Comment
                </div>
              </div>
            </div>

          </div>

          <table class="ui celled table">
            <thead>
            <tr>
              <th>Timestamp</th>
              <th>Type</th>
              <th>Content</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="positive">2015-03-15 09:08 UTC+08</td>
              <td class="positive">
                <i class="checkmark icon"></i>
                Comment
              </td>
              <td class="positive">It's a very looooooooooooooooooooooong comment</td>
            </tr>
            <tr>
              <td class="negative">2015-03-16 19:28 UTC+08</td>
              <td class="negative">
                <i class="remove icon"></i>
                Error
              </td>
              <td class="negative">It's a very looooooooooooooooooooooong error</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="warning">2015-03-14 09:08 UTC+08</td>
              <td class="warning">
                <i class="attention icon"></i>
                Warning
              </td>
              <td class="warning">It's a very looooooooooooooooooooooong warning</td>
            </tr>
            <tr>
              <td class="negative">2015-03-16 19:28 UTC+08</td>
              <td class="negative">
                <i class="remove icon"></i>
                Error
              </td>
              <td class="negative">It's a very looooooooooooooooooooooong error</td>
            </tr>
            <tr>
              <td>2015-03-16 21:28 UTC+08</td>
              <td>
                <i class="info icon"></i>
                Info
              </td>
              <td>It's a very looooooooooooooooooooooong info</td>
            </tr>

            </tbody>
          </table>

        </div>
      </div>
    </div>


  <style type="text/css">
    body {
      overflow:hidden;
    }

    .ui.statistic.at-center {
      display: block;
      margin: 0 auto;
    }
    .label.at-center {
      display: block;
      margin: 0 auto;
    }

  </style>

    <script type="text/javascript">
      $(document)
              .ready(function(){
                $('.ui.dropdown')
                        .dropdown()
                ;
                $('.ui.menu .dropdown')
                        .dropdown({
                          on: 'hover'
                        })
                ;
              })
      ;
    </script>
