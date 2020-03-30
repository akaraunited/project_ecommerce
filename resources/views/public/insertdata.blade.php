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
            <div class="pmd-card-body">
                <h3 style="margin-bottom:20px">Insert Data</h3>
                <!-- Regular Input -->
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="regular1" class="control-label">Product Name</label>
                        <input type="text" id="regular1" class="form-control">
                    </div>
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <textarea required="" class="form-control"></textarea>
                    </div>
            </div>
            <!-- upload image -->
            <div class="form-group">
                <label for="selphoto" class="col-sm-2 control-label">Select a File to upload:</label>
                <div class="col-sm-5">
                    <input type="file" class="inputstl" id="selphoto" name="sentfile" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                    <div class="bootstrap-filestyle input-group"><input type="text" class="form-control " placeholder="" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="selphoto" class="btn btn-primary "><span class="icon-span-filestyle glyphicon glyphicon-upload"></span> <span class="buttonText"> Upload an Image</span></label></span></div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <button type="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    @endsection