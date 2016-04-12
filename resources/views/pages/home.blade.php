@extends('app')


@section('content')
    <div align="center">
        <div class="row">
            <div class="one-third column">
                <h1>_</h1>
            </div>
        </div>
        <h1 id="cdate"></h1>
        <h1 id="ctime"></h1>
    </div>
    <script type="text/javascript">
        function getClock()
        {
            var t = new Date();
            var hour = t.getHours(),
                    min = t.getMinutes(),
                    sec = t.getSeconds(),
                    month = t.getMonth(),
                    day = t.getDate(),
                    year = t.getYear();

            if(min <= 9)
                    min = "0" + min;
            if(sec <= 9)
                    sec = "0" + sec;
            if(year < 1000)
                    year += 1900;

            document.getElementById('cdate').innerHTML = (month + 1) + "." + day + "." + year;
            document.getElementById('ctime').innerHTML = hour + ":" + min + ":" + sec;
        }

        window.onload = function(){
            getClock();
            setInterval(getClock, 1000);
        }
    </script>
@stop