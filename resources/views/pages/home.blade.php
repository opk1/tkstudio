@extends('app')


@section('home_content')
    <div align="center">
        <div class="row">
            <div class="twelve columns">
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

@section('pricing_content')
    <div align="container">
        <div class="row">
            <div class="twelve columns">
                <h1>Pricing</h1><br />
                <div class="row">
                    <div class="four columns">
                        <h3>For Start-ups</h3>
                        <h4>($499.99)</h4>
                        <ul>
                            <li>Basic Design</li>
                            <li>Basic SEO</li>
                            <li>Upto 5 pages</li>
                            <li>Basic Module</li>
                        </ul>
                    </div>

                    <div class="four columns">
                        <h3>For Small/Medium Business</h3>
                        <h4>($799.99)</h4>
                        <ul>
                            <li>Premium Design</li>
                            <li>Advanced SEO</li>
                            <li>Upto 10 pages</li>
                            <li>Advanced Module</li>
                        </ul>
                    </div>

                    <div class="four columns">
                        <h3>For Enterprise</h3>
                        <h4>($1499.99)</h4>
                        <ul>
                            <li>Premium Design</li>
                            <li>E-Commerce integration</li>
                            <li>10++ pages</li>
                            <li>Advanced Module</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('contact_content')
    <div class="twelve columns">
        <h1>Contact Us</h1><br />
        <div class="row">
            <form>
                <div class="row">
                    <div class="six columns">
                        <label for="exampleEmailInput">Your email</label>
                        <input class="u-full-width" placeholder="test@mailbox.com" id="exampleEmailInput" type="email">
                    </div>
                    <div class="six columns">
                        <label for="exampleRecipientInput">Reason for contacting</label>
                        <select class="u-full-width" id="exampleRecipientInput">
                            <option value="Option 1">Questions</option>
                            <option value="Option 2">Admiration</option>
                            <option value="Option 3">Can I get your number?</option>
                        </select>
                    </div>
                </div>
                
                <label for="exampleMessage">Message</label>
                <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
                <label class="example-send-yourself-copy">
                    <input type="checkbox">
                    <span class="label-body">Send a copy to yourself</span>
                </label>
                <input class="button-primary" value="Submit" type="submit">
            </form>
        </div>
    </div>
@stop