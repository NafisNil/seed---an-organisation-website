
@include('backend.sessionMsg')
<div class="card-body">


    <div class="form-group row">
        <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
        <div class="col-md-6">

        <img id="showImage" src="{{(!empty($edit->photo))?URL::to('storage/'.$edit->photo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
      </div>
    </div>
      <div class="form-group">
        <label for="exampleInputFile">Logo <span style="color:red" >*</span></label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="photo" class="custom-file-input"  id="image"  value="{{ @$edit->photo }}">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>

        </div>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Description <span style="color:red" >*</span></label>
    
        <textarea name="desc" id="" cols="30" rows="10" class="form-control">{!!old('desc',@$edit->desc)!!}</textarea>
    
      </div>
    
    
      <div class="form-group">
        <label for="exampleInputEmail1">Title <span style="color:red" >*</span></label>
    
        <input type="text"  class="form-control" name="title"  value="{!!old('title',@$edit->title)!!}">
    
      </div>

     
    
    
      <div class="form-group">
        <label for="exampleInputEmail1">Date <span style="color:red" >*</span></label>
    
        <input type="date"  class="form-control" name="date"  value="{!!old('date',@$edit->date)!!}">
    
      </div>

    
    
      <div class="form-group">
        <label for="exampleInputEmail1">Time <span style="color:red" >*</span></label>
    
        <input type="time"  class="form-control" name="time"  value="{!!old('time',@$edit->time)!!}">
    
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Location <span style="color:red" >*</span></label>
    
        <input type="text"  class="form-control" name="location"  value="{!!old('location',@$edit->location)!!}">
    
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Type</label>
       
        <select class="form-control" name="category" id="dropdown">
          
          <option>Select Category</option>
            
         
            <option value="Previous" {{ ( "Previous" == @$edit->category) ? 'selected' : '' }}> 
              Previous
            </option>
            <option value="On-Going" {{ ( "On-Going" == @$edit->category) ? 'selected' : '' }}> 
                On-going

            </option>
            <option value="Upcoming" {{ ( "Upcoming" == @$edit->category) ? 'selected' : '' }}> 
              Upcoming
            </option>
  
         
        </select>
       
      </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>



<script>

    CKEDITOR.replace( 'desc' );

</script>



