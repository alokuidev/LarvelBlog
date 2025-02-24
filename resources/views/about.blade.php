<h1>About Us Page</h1>
<x-message-banner msg="Redeirected to AboutUs Page Successfully" class="error" />
<h4>{{$name}}</h4>

@foreach($users as $user)
    <h5>{{$user}}</h5>
@endforeach


<style>
    .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 15px 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            max-width: 300px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .error {
            background-color: #f35d05;
            color: #fff;
            padding: 15px 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            max-width: 300px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .success-message::before {
            content: "✔";
            font-size: 18px;
        }
        .close-btn {
            background: none;
            border: none;
            color: #155724;
            font-size: 16px;
            cursor: pointer;
            margin-left: auto;
        }
        .close-btn:hover {
            color: #0b2e13;
        }

</style>