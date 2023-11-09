@extends('layouts.admin')
@section('content')
<div class="">
      <div class="d-flex align-items-center justify-content-between">
        <h3>Add your work</h3>
        <h6 id="selected-date" class="mb-0">Today</h6>
        <select name="" id="log-type" class="form-select" style="width:200px" onchange="logType(this)">
            <option value="daily">Daily Log</option>
            <option value="weekly">Weekly Log</option>
            <!-- <option value="monthly">Monthly Log</option> -->
        </select>
      </div>
      <form onsubmit="event.preventDefault(); saveTimeTrack()" method="post">
    <div class="table-responsive mt-3">
        <table class="table" style="min-width:max-content">
            <thead id="table-header">
                <tr>
                <th>Sl no.</th>
                <th>Project Name</th>
                <th>Job Name</th>
                <th>Description</th>
                <th>Billable Status</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
              </thead>
              <tbody id="table-body">
                <!-- <tr>
                    <td>1</td>
                    <td>
                        <select name="" id="" class="form-select">
                            <option value="">Select project</option>
                            <option value="Select project 1">Select project 1</option>
                            <option value="Select project 2">Select project 2</option>
                        </select>
                    </td>
                    <td><select name="" id="" class="form-select">
                            <option value="">Select job</option>
                            <option value="Select job 1">Select job 1</option>
                            <option value="Select job 2">Select job 2</option>
                        </select></td>
                    <td><input type="text" class="form-control"></td>
                    <td><select name="" id="" class="form-select">
                            <option value="">Billable</option>
                            <option value="Select Billable 1">Select Billable 1</option>
                            <option value="Select Billable 2">Select Billable 2</option>
                        </select></td>
                    <td><input type="time" class="form-control" value="" /></td>
                    <td><input type="time" class="form-control" value="" /></td>
                </tr> -->
              </tbody>
        </table>
        <button class="" type="button" style="background-color:transparent;border:none;color:#001293;font-weight:600" onclick="addRow()">+ Add row</button>
    </div>
    <div class="d-flex justify-content-end">
    <button class="btn px-5 py-2">Save</button>
    </div>
    </form>
    <h3>Time Logs</h3>
    <div class="table-responsive mt-3">
        <table class="table" style="min-width:max-content">
            <thead id="table-header">
                <tr>
                <th>Sl no.</th>
                <th>Project Name</th>
                <th>Job Name</th>
                <th>Billable Status</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
              </thead>
              <tbody>
                @foreach($time_trackers as $key => $time_tracker)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$time_tracker['project_name']}}</td>
                  <td>{{$time_tracker['job_name']}}</td>
                  <td>{{$time_tracker['billable_status']}}</td>
                  <td>{{$time_tracker['working_date']}}</td>
                  <td>{{$time_tracker['start_time']}}</td>
                  <td>{{$time_tracker['end_time']}}</td>
                  <td><a href="#" class="btn">Edit</a></td>
                </tr>
                @endforeach
              </tbody>
</table>
</div>
</div>
@endsection
@push('custom-scripts')
<script>
  ///time tracker................
  let json_data_monthly = [
    [
    {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    }
    ]
  ];
  let json_data_weekly = [
    [
    {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    }
    ]
  ];
  let json_data_today = [
        {
        project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    } 
  ];
  @php
  $options = "";
foreach($projects as $project){
    $options = '<option value="'.$options.$project->id.'">'.$options.$project->project_name.'</option>';
}
  @endphp
  let project_data = @php echo $projects; @endphp;
  let projects = @php echo "'".$options."';"; @endphp
  // let jobNames = '<option value="Software Engineer">Software Engineer</option><option value="Senior Software Engineer">Senior Software Engineer</option><option value="Team Lead">Team Lead</option><option value="Project Manager">Project Manager</option>';
  let jobNames = ['Software Engineer','Senior Software Engineer','Team Lead','Project Manager'];
  let todayTFormat = '<tr><td>1</td><td><select name="project_id" id="" class="form-select" onclick="updateData(this,0)"><option value="">Select project</option>@php echo $options; @endphp</select></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Select job</option><option value="Select job 1">Select job 1</option><option value="Select job 2">Select job 2</option></select></td>'+
                    '<td><input type="text" class="form-control"></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Billable</option><option value="Select Billable 1">Select Billable 1</option><option value="Select Billable 2">Select Billable 2</option></select></td>'+
                    '<td><input type="time" class="form-control" value="" /></td>'+
                    '<td><input type="time" class="form-control" value="" /></td>'+
                '</tr>';

        let weeklyTFormat = '<tr><td>1</td><td><select name="project_id" id="" class="form-select" onclick="updateData(this,0)"><option value="">Select project</option>@php echo $options; @endphp</select></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Select job</option><option value="Select job 1">Select job 1</option><option value="Select job 2">Select job 2</option></select></td>'+
                    '<td><input type="text" class="form-control"></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Billable</option><option value="Select Billable 1">Select Billable 1</option><option value="Select Billable 2">Select Billable 2</option></select></td>'+
          '<td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td></tr>';

    function updateFormat(){
        let tr = document.querySelectorAll("#table-body tr");
        let count = tr.length;
        let log_type = document.getElementById("log-type").value;
        if(log_type == "daily"){
            todayTFormat='<tr><td>'+(count+1)+'</td><td><select name="project_id" id="" class="form-select" onclick="updateData(this,0)"><option value="">Select project</option>@php echo $options; @endphp</select></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Select job</option><option value="Select job 1">Select job 1</option><option value="Select job 2">Select job 2</option></select></td>'+
                    '<td><input type="text" class="form-control"></td>'+
                    '<td><select name="billable_status" id="" class="form-select"><option value="billable">Billable</option><option value="non-billable">Non Billable</option></select></td>'+
                    '<td><input type="time" class="form-control" value="" /></td>'+
                    '<td><input type="time" class="form-control" value="" /></td>'+
                '</tr>';
          }
          else if(log_type == "weekly"){
            weeklyTFormat = '<tr><td>'+(count+1)+'</td><td><select name="project_id" id="" class="form-select" onclick="updateData(this,0)"><option value="">Select project</option>@php echo $options; @endphp</select></td>'+
                    '<td><select name="" id="" class="form-select"><option value="">Select job</option><option value="Select job 1">Select job 1</option><option value="Select job 2">Select job 2</option></select></td>'+
                    '<td><input type="text" class="form-control"></td>'+
                    '<td><select name="billable_status" id="" class="form-select"><option value="billable">Billable</option><option value="non-billable">Non Billable</option></select></td>'+
          '<td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" /><span class="mx-2">-</span><input type="time" class="form-control" value="" /></div></td></tr>';
          let html = "";
          json_data_weekly.map((item)=>{
            item.map((innerItem)=>{
                console.log(innerItem);
            })
          })          
          }
       
             
    }
        function addRow(){
            // updateFormat();
          let log_type = document.getElementById("log-type").value;
          // let body = document.getElementById("table-body");
          // let count = document.querySelectorAll("#table-body tr");
          if(log_type == "daily"){
            // body.innerHTML += todayTFormat;
            json_data_today.push({
        project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    });

          }
          else if(log_type == "weekly"){
            json_data_weekly.push( 
            [
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    },
       {
         project_id:"",
        job_name:"",
        description:"",
        billable_status:"",
        date:"",
        start_time:"",
        end_time:""
    }
    ]
    );
          }
         tableFormat(log_type);
        }
        function logType(elm){
          // const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];
          if(elm.value == "weekly"){
            tableFormat(elm.value);
          }
          else if(elm.value == "monthly"){
            tableFormat(elm.value);
          }
          else if(elm.value == "daily"){
            tableFormat(elm.value);
          }
          // console.log("from date",month[from_date.getMonth()],end_date.getDate());
        }
        

function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}
        function tableFormat(type){
          const month = ["Jan","Feb","March","April","May","June","July","Aug","Sept","Oct","Nov","Dec"];
          var today = new Date();
          let from_date = new Date();
          let end_date = new Date();
          let sunDate = today.getDate() - today.getDay();
          console.log("sun date",new Date("2023", "11", "0"));
          let satDate = sunDate+6;
          from_date.setDate(sunDate);
          end_date.setDate(satDate);  
          let tableHeader = document.getElementById("table-header");
          let tableBody = document.getElementById("table-body");
          let selected = document.getElementById("selected-date");
          //test start
          let testDate = new Date();
          let testMonth = testDate.getMonth() + 1;
          let testYear = testDate.getFullYear();
          let testDays = daysInMonth(testMonth, testYear);
          let pastMonth = testDate.getMonth();
          let pastMonthLastDay = daysInMonth(pastMonth, testYear);
          console.log("testDate",pastMonthLastDay);
          let newDay = 0;
          //test end
          if(type == "weekly"){
            // tableHeader.innerHTML = '<tr><th>Sl no.</th><th>Project Name</th><th>Job Name</th><th>Description</th><th>Billable Status</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+1)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+2)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+3)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+4)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+5)+'</th><th>'+(testDays<sunDate ? month[from_date.getMonth()+1]+" "+newDay++ : month[from_date.getMonth()]+" "+sunDate+6)+'</th></tr>';
            tableHeader.innerHTML = '<tr><th>Sl no.</th><th>Project Name</th><th>Job Name</th><th>Description</th><th>Billable Status</th><th>'+(testDays<sunDate ? 1 : month[from_date.getMonth()]+" "+sunDate)+'</th><th>'+month[from_date.getMonth()]+" "+(sunDate+1)+'</th><th>'+month[from_date.getMonth()]+" "+(sunDate+2)+'</th><th>'+month[from_date.getMonth()]+" "+(sunDate+3)+'</th><th>'+month[from_date.getMonth()]+" "+(sunDate+4)+'</th><th>'+(testDays<sunDate+5 ?  month[from_date.getMonth()+1]+" "+(newDay = newDay+1) : month[from_date.getMonth()]+" "+(sunDate+5))+'</th><th>'+(testDays<sunDate+6 ? month[from_date.getMonth()+1]+" "+(newDay = newDay+1) : month[from_date.getMonth()]+" "+(sunDate+6))+'</th></tr>';
          // tableBody.innerHTML = weeklyTFormat;
          let html = "";
          json_data_weekly.map((item,index)=>{
            projects = "";
            project_data.map((item,index)=>{
             projects += '<option value="'+item.id+'">'+item.project_name+'</option>';
            });
            let job = "";
            jobNames.map((jobName,i)=>{
              job += '<option value="'+jobName+'"'+(jobName == item.job_name && 'selected')+'>'+jobName+'</option>';
            });
            html += '<tr><td>'+(index+1)+'</td><td><select name="project_id" class="form-select" onchange="updateData(this,'+index+')" required><option value="">Select a project</option>'+projects+'</select></td><td><select name="job_name" class="form-select" onchange="updateData(this,'+index+')" required><option value="">Select a job name</option>'+job+'</select></td><td><input type="text" class="form-control" name="description" onchange="updateData(this,'+index+')" value="'+item[0].description+'" required/></td><td><select name="billable_status" class="form-select" onchange="updateData(this,'+index+')" required><option value="billable_status1">Billable Status 1</option><option value="billable_status2">Billable Status 2</option></select></td></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',0)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',0)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',1)" /><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',1)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',2)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',2)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',3)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',3)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',4)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',4)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',5)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',5)"/></div></td><td><div class="d-flex align-items-center"><input type="time" class="form-control" value="" name="start_time" onchange="updateData(this,'+index+',6)"/><span class="mx-2">-</span><input type="time" class="form-control" value="" name="end_time" onchange="updateData(this,'+index+',6)"/></div></td>';
            console.log(item);
          });
          tableBody.innerHTML = html;
          selected.innerHTML = sunDate+'-'+month[from_date.getMonth()]+'-'+'2023'+'<span class="mx-2">-</span>'+(sunDate+6)+'-'+month[from_date.getMonth()]+'-'+'2023';
          }
          else if(type == "monthly"){

          }
          else if(type == "daily"){
            tableHeader.innerHTML = '<tr><th>Sl no.</th><th>Project Name</th><th>Job Name</th><th>Description</th><th>Billable Status</th><th>Start Time</th><th>End Time</th></tr>';
            let html = "";
            json_data_today.map((item,index)=>{
            projects = "";
            project_data.map((inner_item,index)=>{
             projects += '<option value="'+inner_item.id+'"'+(item.project_id == inner_item.id && 'selected')+'>'+inner_item.project_name+'</option>';
            });
            let job = "";
            jobNames.map((jobName,i)=>{
              job += '<option value="'+jobName+'"'+(jobName == item.job_name && 'selected')+'>'+jobName+'</option>';
            });
            html += '<tr><td>'+(index+1)+'</td><td><select name="project_id" class="form-select" onchange="updateTodayData(this,'+index+')" required><option value="">Select a project</option>'+projects+'</select></td><td><select name="job_name" class="form-select" onchange="updateTodayData(this,'+index+')" required><option value="">Select a job name</option>'+job+'</select></td><td><input type="text" class="form-control" name="description" value="'+item.description+'" onchange="updateTodayData(this,'+index+')" required/></td><td><select name="billable_status" class="form-select" onchange="updateTodayData(this,'+index+')" required><option value="">Select status</option><option value="billable_status1">Billable Status 1</option><option value="billable_status2">Billable Status 2</option></select></td></td><td><input type="time" class="form-control" value="'+item.start_time+'" name="start_time" onchange="updateTodayData(this,'+index+',6)"/></td><td><input type="time" class="form-control"  value="'+item.end_time+'" name="end_time" onchange="updateTodayData(this,'+index+')"/></td>';
          });
          tableBody.innerHTML = html;
          }
          else{
            alert("Something went wrong")
          }
          console.log("project_data",typeof(project_data));
        }
        tableFormat("daily");

        function updateData(elm,index,date_index){
          var today = new Date();
          let from_date = new Date();
          let end_date = new Date();
          let year = from_date.getFullYear();
          let month = from_date.getMonth();
          let sunDate = today.getDate() - today.getDay();
          let satDate = sunDate+6;
          let date = year+"-"+(month+1)+"-"+from_date.getDay();
          if(elm.name == "start_time" || elm.name == "end_time"){
            json_data_weekly[index][date_index]['date'] = year+"-"+(month+1)+"-"+(sunDate+date_index);
            json_data_weekly[index][date_index][elm.name] = elm.value;
              }
              else{
                json_data_weekly[index].map((item)=>{
                item[elm.name] = elm.value;
            })
              }
          
            
            console.log(json_data_weekly);
        }
        function updateTodayData(elm,index){
          var today = new Date();
          let year = today.getFullYear();
          let month = today.getMonth();
          let date = year+"-"+(month+1)+"-"+today.getDay();
          json_data_today[index][elm.name] = elm.value;
          json_data_today[index]['date'] = date;
          console.log(json_data_today);
        }
      async function saveTimeTrack(){
        let log_type = document.getElementById("log-type").value;
        let json_data = json_data_today;
        if(log_type=="weekly"){
          json_data = json_data_weekly;
        }
        try{
          const response = await fetch('{{route('save-time-tracker')}}', {
    method: "POST", // *GET, POST, PUT, DELETE, etc.
    headers: {
      "Content-Type": "application/json",
      'X-CSRF_TOKEN':'{{csrf_token()}}'
      // 'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: JSON.stringify({data:json_data,type:log_type,_token: '{{csrf_token()}}'}), // body data type must match "Content-Type" header
  });
  let val = await response.json();
  if(val.status && val.status == 200){
    location.reload();
  }
        }
        catch(e){
          alert('Please enter valid input')
        }
      
        }
</script>
@endpush