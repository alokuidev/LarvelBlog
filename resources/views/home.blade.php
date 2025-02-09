@include('common.header')
<x-message-banner msg="Redeirected to Home Page Successfully" class="success-message"/>
<h1>Home Page</h1>
@include('common.inner')
<a href="/welcome">Welcome Page</a>
<a href="/about">About</a>
<a href="/about/alok">Alok</a>
@include('about.about', ['pageName' => 'This is Home Page'])
@include('common.footer')

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