<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Property System</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <!-- Styles -->
    
        <style>
            * {
                box-sizing: border-box;
                font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
                font-size: 16px;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                }
                body {
                background-color: #e7ecec;
                }
                .navtop {
                background-color: #d63263;
                height: 60px;
                width: 100%;
                border: 0;
                }
                .navtop div {
                display: flex;
                margin: 0 auto;
                width: 1400px;
                height: 100%;
                }
                .navtop div h1, .navtop div a {
                display: inline-flex;
                align-items: center;
                }
                .navtop div h1 {
                flex: 1;
                font-size: 24px;
                padding: 0;
                margin: 0;
                color: #fdfdff;
                font-weight: bold;
                }
                .navtop div a {
                padding: 0 20px;
                text-decoration: none;
                color: #fdfdff;
                font-weight: bold;
                }
                .navtop div a i {
                padding: 2px 8px 0 0;
                }
                .navtop div a:hover {
                color: #eaebed;
                }
                body.loggedin {
                background-color: #f3f4f7;
                }
                .content {
                width: 1400px;
                margin: 0 auto;
                }
                .content h2 {
                margin: 0;
                padding: 25px 0;
                font-size: 22px;
                border-bottom: 1px solid #e0e0e3;
                color: #d63263;
                }
                .content > p, .content > div {
                box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
                margin: 25px 0;
                padding: 25px;
                background-color: #fff;
                }
                .content > p table td, .content > div table td {
                padding: 5px;
                }
                .content > p table td:first-child, .content > div table td:first-child {
                font-weight: bold;
                color: #4a536e;
                padding-right: 15px;
                }
                .content > div p {
                padding: 5px;
                margin: 0 0 10px 0;
                }
        </style>

    </head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1> CRUD interface</h1>
				<a href="{{ url('/login/logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
        <div class="content">
			<h2>Property System </h2>
            <p>Welcome | Role : {{Auth::user()->username}}</p>
            <div class="card">
                <div class=card-body>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#fetchdata">
                        Fetch API Data
                    </button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#propertyData">
                        Add Data
                    </button>         
                </div>
                <div class="table-responsive">
                <table class="table">
                <table id= "dbdatatable" class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">County</th>
                                <th scope="col">Country</th>
                                <th scope="col">Town</th>
                                <th scope="col">Postcode</th>
                                <th scope="col">Description</th>
                                <th scope="col">FullDetailsURL</th>
                                <th scope="col">DisplayableAddress</th>
                                <th scope="col">Image</th>
                                <th scope="col">ImageURL</th>
                                <th scope="col">ThumbnailURL</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Numberofbedrooms</th>
                                <th scope="col">Numberofbathrooms</th>
                                <th scope="col">Price</th>
                                <th scope="col">PropertyType</th>
                                <th scope="col">ForSale_ForRent</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PropertyData as $row)
                            <tr>
                                <td>{{ $row->Id }}</td>
                                <td>{{ $row->County }}</td>
                                <td>{{ $row->Country }}</td>
                                <td>{{ $row->Town }}</td>
                                <td>{{ $row->Postcode }}</td>
                                <td>{{ $row->Description }}</td>
                                <td>{{ $row->FullDetailsURL }}</td>
                                <td>{{ $row->DisplayableAddress }}</td>
                                <td><img src="{{ asset('public'. $row->Image) }}" alt="Image"></td>
                                <td>{{ $row->ImageURL }}</td>
                                <td>{{ $row->ThumbnailURL }}</td>
                                <td>{{ $row->Latitude }}</td>
                                <td>{{ $row->Longitude }}</td>
                                <td>{{ $row->NumberOfBedrooms }}</td>
                                <td>{{ $row->NumberOfBathrooms }}</td>
                                <td>{{ $row->Price }}</td>
                                <td>{{ $row->PropertyType }}</td>
                                <td>{{ $row->ForSale_ForRent }}</td>
                                <td>{{ $row->created_at }}</td>
                                <td>{{ $row->updated_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn">Edit</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger delbtn">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> 

        
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#dbdatatable').DataTable( {
        "scrollX": true
    } );
} );
</script>

<script>
$(document).ready(function() {
    $('#adddata').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/login/PropertySystem',
            data: $('#adddata').serialize(),
            success: function (response){
                console.log(response);
                $('#propertyData').modal('hide')
                alert("Property Added");
                window.location='/login/PropertySystem'
            },
            error:function(error){
                console.log(error);
                alert("Property Not Added");
            }

        });
        
    } );
} );
</script>
<script>
$(document).ready(function() {
    $('#fetchdata').on('submit', function(e) {
        e.preventDefault();
        var api_key = "api_key=3NLTTNlXsi6rBWl7nYGluOdkl2htFHu";
        $.ajax({
            type: 'GET',
            url: 'http://trialapi.craig.mtcdevserver.com/api/properties/'+api_key,
            data: "",
            dataType: "json",
            success: function (data){
                console.log(data);
                $('#fetchdata').modal('hide')
                alert("Property Data Fetched Succesfully");
                window.location='/login/PropertySystem'
            },
            error:function(error){
                console.log(error);
                alert("Property Fetch Failed");
            }

        });
        
    } );
} );
</script>
<script>
$(document).ready(function (){
    $('.delbtn').on('click', function(){
        $('#deleteproperty').modal('show');
        $tr =$(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text()
        }).get();
        console.log(data);
        $('#delete_id').val(data[0]);
    });
    $('#deletedata').on('submit', function(e) {
        e.preventDefault();
        var id = $('#delete_id').val();
        $.ajax({
            type: 'DELETE',
            url: '/login/PropertySystem/'+id,
            data: $('#deletedata').serialize(),
            success: function (response){
                console.log(response);
                $('#deleteproperty').modal('hide')
                alert("Property Deleted!");
                window.location='/login/PropertySystem'
            },
            error:function(error){
                console.log(error);
                alert("Property Not Deleted!");
            }
        });
        
    } );
});
</script>
<script>
$(document).ready(function (){
    $('.editbtn').on('click', function(){
        $('#editproperty').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text()
        }).get();
        console.log(data);
        $('#update_id').val(data[0]);
        $('#County').val(data[1]);
        $('#Country').val(data[2]);
        $('#Town').val(data[3]);
        $('#Postcode').val(data[4]);
        $('#Description').val(data[5]);
        $('#DisplayableAddress').val(data[7]);
        $('#Image').val(data[8]);
        $('#NumberOfBedrooms').val(data[13]);
        $('#NumberOfBathrooms').val(data[14]);
        $('#Price').val(data[15]);
        $('#PropertyType').val(data[16]);
        $('#ForSale_ForRent').val(data[17]);
    });
    $('#updatedata').on('submit', function(e) {
        e.preventDefault();
        var id = $('#update_id').val();
        $.ajax({
            type: 'PUT',
            url: '/login/PropertySystem/'+id,
            data: $('#updatedata').serialize(),
            success: function (response){
                console.log(response);
                $('#editproperty').modal('hide')
                alert("Property Updated");
                window.location='/login/PropertySystem'
            },
            error:function(error){
                console.log(error);
                alert("Property Not Updated");
            }
        });
        
    } );
});
</script>
<script>
$(document).ready(function() {
    $('#dbdatatable').DataTable();
} );
</script>
<!--Add Property pop-up -->
<div class="modal fade" id="propertyData" tabindex="-1" role="dialog" aria-labelledby="propertyDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="propertyDataLabel">Add Property</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id= "adddata" action="/login/PropertySystem" method="POST" enctype="multipart/form-data"> 
            {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCounty">County</label>
            <input type="text" name="County"class="form-control" id="inputCounty" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputCountry">Country</label>
            <input type="text" name="Country" class="form-control" id="inputCountry" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputTown">Town</label>
            <input type="text" name="Town"class="form-control" id="inputTown" required>
            </div>
            <div class="form-group col-md-6">
            <label for="inputPostcode">Postcode</label>
            <input type="text" name="Postcode" class="form-control" id="inputPostcode" required>
            </div>
        </div>
        <div class="form-group">
            <label for="DescriptionTextarea">Description</label>
            <textarea class="form-control" name="Description" id="DescriptionTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="inputAddress">Displayable Address</label>
            <input type="text" name="DisplayableAddress" class="form-control" id="inputAddress" required>
        </div>
        <div class="form-group">
            <label for="UploadImage">Upload Image (jpeg,png,jpg)</label>
            <input type="file" name="Image" class="form-control-file" id="UploadImage">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="SelectNoofBedrooms">No. of bedrooms</label>
            <select id="SelectNoofBedrooms" name="NumberOfBedrooms" class="form-control">
                <option selected>Select...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
            <div class="form-group col-md-4">
            <label for="SelectNoofBathrooms">No. of bathrooms</label>
            <select id="SelectNoofBathrooms" name="NumberOfBathrooms" class="form-control">
                <option selected>Select...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPrice">Price</label>
            <input type="text" name="Price" class="form-control" id="inputPrice" required>
            </div>
        </div>
        <div class="form-group">
            <label for="SelectPropertyType">Property Type</label>
            <select class="form-control" name="PropertyType" id="SelectPropertyType" required>
            <option>Bungalow</option>
            <option>Flat</option>
            </select>
        </div>
        <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">For</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ForSale_ForRent" id="ForSale_ForRent1" value="Rent" checked>
                        <label class="form-check-label"  for="gridRadios1">
                            Rent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ForSale_ForRent" id="ForSale_ForRent2" value="Sale">
                        <label class="form-check-label"  for="gridRadios1">
                            Sale
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="subimit" name="adddata" class="btn btn-primary">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>   

        <!--Edit Property pop-up -->
<div class="modal fade" id="editproperty" tabindex="-1" role="dialog" aria-labelledby="editpropertyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editpropertyLabel">Edit Property</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="updatedata" method="POST" action= "MYSQLAPIController@update" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PUT')}}

                <input type="hidden" name="update_id" id="update_id">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputCounty">County</label>
            <input type="text" name="County"class="form-control" id="County">
            </div>
            <div class="form-group col-md-6">
            <label for="inputCountry">Country</label>
            <input type="text" name="Country" class="form-control" id="Country">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputTown">Town</label>
            <input type="text" name="Town"class="form-control" id="Town">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPostcode">Postcode</label>
            <input type="text" name="Postcode" class="form-control" id="Postcode">
            </div>
        </div>
        <div class="form-group">
            <label for="DescriptionTextarea1">Description</label>
            <textarea class="form-control" name="Description" id="Description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="inputAddress">Displayable Address</label>
            <input type="text" name="DisplayableAddress" class="form-control" id="DisplayableAddress">
        </div>
        <div class="input-group">
            <label for="UploadImage">Image</label>
            <input type="file" name="Image" class="form-control-file" id="Image">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="SelectNo.ofBedrooms">No. of bedrooms</label>
            <select class="form-control" name="NumberOfBedrooms" id="NumberOfBedrooms">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            </div>
            <div class="form-group col-md-4">
                <label for="SelectNo.ofBathrooms">No. of bathrooms</label>
                <select name="NumberOfBathrooms" class="form-control" id="NumberOfBathrooms">
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            </div>
            <div class="form-group col-md-4">
            <label for="inputPrice">Price</label>
            <input type="text" name="Price" class="form-control" id="Price">
            </div>
        </div>
        <div class="form-group">
            <label for="SelectPropertyType">Property Type</label>
            <select class="form-control" name="PropertyType" id="PropertyType">
            <option>Bungalow</option>
            <option>Flat</option>
            </select>
        </div>
        <div class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">For</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ForSale_ForRent" id="ForSale_ForRent3" value="Rent" checked>
                        <label class="form-check-label"  for="gridRadios1">
                            Rent
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ForSale_ForRent" id="ForSale_ForRent4" value="Sale">
                        <label class="form-check-label"  for="gridRadios2">
                            Sale
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" name="updatedata" class="btn btn-success">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
        <!--Delete Property pop-up -->
        <div class="modal fade" id="deleteproperty" tabindex="-1" role="dialog" aria-labelledby="deletepropertyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletepropertyLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="deletedata" action= "/login/PropertySystem/{id}">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
                <input type="hidden" name="delete_id" id="delete_id">
                <h4> Do you wish to DELETE this Property?</h4>
 
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="submit" name="deletedata" class="btn btn-success">Proceed</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!--Fetch APIData Property pop-up -->
  <div class="modal fade" id="fetchdata" tabindex="-1" role="dialog" aria-labelledby="fetchdataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fetchdataLabel">Confirm Get Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="" method="POST">
            {{ csrf_field() }}
            {{method_field('GET')}}
                <h4> Add/Update Property Data From API </h4>
 
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            <button type="subimit" name="fetchdata" class="btn btn-success">Fetch</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
    </body>
</html>