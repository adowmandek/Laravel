@extends('layouts.app')
@section('content')
<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-white display-4">Vue Js Todo APP</h1>
    <todo-component></todo-component>

















    &lt;!doctype html&gt;
&lt;html lang="{{ str_replace('_', '-', app()-"gt;getLocale()) }}"&gt;
    &lt;head&gt;
        &lt;meta charset="utf-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
        &lt;meta name="csrf-token" content="{{ csrf_token() }}" /&gt;
        &lt;title&gt;Realtime to-do app&lt;/title&gt;
        &lt;!-- Fonts --&gt;
        &lt;link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"&gt;
        {{--  Style  --}}
        &lt;link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css"&gt;
        &lt;!-- Styles --&gt;
        &lt;style&gt;
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links &gt; a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
          &lt;div id="app"&gt;
                    &lt;todo-app&gt;&lt;/todo-app&gt;
          &lt;/div&gt;

          &lt;script src="{{mix('js/app.js')}}"&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;









</div>
@endsection





