@extends('layout.app')
@section('content')
   <div style="margin-right:900px;"><style>
    .profile-container {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      border: 3px solid #4CAF50;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      margin: 20px auto;
    }

    .profile-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
<div style="display:flex">
  <div class="profile-container">
    <img src="your-profile-pic.jpg" alt="Profile Picture">
  </div>

<div style="">
    <h1 >oliver</h1>
</div>
</div>
@endsection
