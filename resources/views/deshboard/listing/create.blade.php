@extends('master')

@section('contents')


    <style type="text/css">
    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem;

        background: -moz-linear-gradient(top, rgba(30, 87, 153, 1) 0%, rgba(30, 87, 153, 0.54) 46%, rgba(125, 185, 232, 0.18) 82%, rgba(125, 185, 232, 0) 100%);
        /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(30, 87, 153, 1) 0%, rgba(30, 87, 153, 0.54) 46%, rgba(125, 185, 232, 0.18) 82%, rgba(125, 185, 232, 0) 100%);
        /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(30, 87, 153, 1) 0%, rgba(30, 87, 153, 0.54) 46%, rgba(125, 185, 232, 0.18) 82%, rgba(125, 185, 232, 0) 100%);
        /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e5799', endColorstr='#007db9e8', GradientType=0);
        /* IE6-9 */
    }

    .hd1 {
        color: #fff;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
                <form action="{{route('deshboard.listing.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
            <div class="pmd-card-body">
                <h3 style="margin-bottom:20px">Insert Data</h3>
                <!-- Regular Input -->
           
                    <div class="form-group">
                        <label for="regular1" class="control-label">Product Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name...">
                    </div>
                    <div class="form-group">
                        <label for="regular1" class="control-label">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Enter your price...">
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea required="" name="description" class="form-control"></textarea>
                    </div>

                    
            </div>
            <!-- upload image -->
            <div class="row">
                <div class="col-md-8">
                        <label>Image<i class="fa fa-map-marker"></i></label>
                        <input name="new_image" type="file" id="new_image" />
                </div>
                <div class="col-md-4">
                    
                                <label>Category</label>
                                <select name="category_id" data-placeholder="All Categories" class="chosen-select">
                                    @foreach ($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name}}</option>
                                    @endforeach
                                </select>     
                    
                </div>
            </div>

                <div class="form-group ">
                    <div class=" col-sm-4" style="margin-top:5%;float:right;">
                        <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    @endsection