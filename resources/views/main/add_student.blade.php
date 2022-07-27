@extends('dashboard')
@section('content')

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="message">{{ Session::get('message') }}</p>
@endif


@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif


<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#006600">
  <tr>
    <td>
      <div align="center">
        <font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="5">Something School Name</font>
      </div>
    </td>
  </tr>
  <tr>
    <td align="center">
      <font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="3"> Student Informatoin Form</font>
    </td>

  </tr>
</table>

<table width="100%" border="0">

  <form id="student" name="student" method="post" enctype="multipart/form-data" action="{{url('save-student-info')}}">
    @csrf
    <table width="100%" border="0" cellspacing="3">
      <tr>
        <td colspan="3" class="txtappformbody"> &nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" valign="top" class="txtappformbody" align="center" bgcolor="#CCCCCC"> <b>Student's Personal Information </b></td>
      </tr>
      <tr>
        <td width="20%" class="txtappformbody">&nbsp;</td>
        <td width="5%" class="txtappformbody">&nbsp;</td>
        <td width="45%" class="txtappformbody">&nbsp;</td>
        <td width="30%" class="txtappformbody">&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Student's Name <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_name" type="text" id="std_name" size="45" value="{{old('std_name')}}" class="form-control" />

          <p class="error text-danger">{{$errors->first('std_name')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Class <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><select name="std_class" id="std_class" value="{{old('std_class')}}" class="form-control">
            <option selected="selected" disabled>Please select a class</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
            <option value="6">Six</option>
          </select>

          <p class="error text-danger">{{$errors->first('std_class')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Student's Roll <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_roll" type="text" id="std_roll" size="45" value="{{old('std_roll')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_roll')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Gender<span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><select name="std_gender" id="std_gender" value="{{old('std_gender')}}" class="form-control">
            <option value="1" selected="selected">Male</option>
            <option value="0">Female</option>
          </select>
          <p class="error text-danger">{{$errors->first('std_gender')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Date of Birth <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_dateOfbirth" type="date" id="std_dateOfbirth" value="{{old('std_dateOfbirth')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_dateOfbirth')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Age as on today </td>
        <td class="txtappformbody">:</td>
        <td><input name="std_age" type="text" id="std_age" tabindex="4" readonly="readonly" value="{{old('std_age')}}" class="form-control" />
          <p></p>
        </td>
        <input type="hidden" name="eligible" id="eligible">
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td class="txtappformbody">Religion<span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><select name="std_religion" id="std_religion" value="{{old('std_religion')}}" class="form-control">
            <option value="1">Islam</option>
            <option value="2">Sanatan</option>
            <option value="3">Buddhist</option>
            <option value="4">Christian</option>
            <option value="5">Others</option>
            <option value="0" selected="selected">Select Religion</option>
          </select>
          <p class="error text-danger">{{$errors->first('std_religion')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td class="txtappformbody">Nationality<span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_nationality" type="text" id="std_nationality" size="45" value="{{old('std_nationality')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_nationality')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Birth Registration No <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_birth_reg" type="text" id="std_birth_reg" size="45" maxlength="20" value="{{old('std_birth_reg')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_birth_reg')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Present Address <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><textarea id="std_present_add" name="std_present_add" rows="2" cols="48" value="{{old('std_present_add')}}" class="form-control"></textarea>
          <p class="error text-danger">{{$errors->first('std_present_add')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><button onclick="myFunction()">Same</button>

        </td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td class="txtappformbody">Permanent Address <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><textarea id="std_permenent_add" name="std_permenent_add" rows="2" cols="48" value="{{old('std_permenent_add')}}" class="form-control"></textarea>
          <p class="error text-danger">{{$errors->first('std_permenent_add')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>

      <tr>
        <td class="txtappformbody">Home District<span class="style3">*</span> </td>
        <td class="txtappformbody">:</td>

        <td><select name="std_homedistrict" id="std_homedistrict" value="{{old('std_homedistrict')}}" class="form-control">
            <option value="Select District">Select District</option>
            <option value="01">Bagerhat</option>
            <option value="03">Bandarban</option>
            <option value="04">Barguna</option>
            <option value="06">Barishal</option>
            <option value="09">Bhola</option>
            <option value="10">Bogura</option>
            <option value="12">Brahamanbaria</option>
            <option value="13">Chandpur</option>
            <option value="15">Chattogram</option>
            <option value="18">Chuadanga</option>
            <option value="19">Cumilla</option>
            <option value="22">Cox'S Bazar</option>
            <option value="26">Dhaka</option>
            <option value="27">Dinajpur</option>
            <option value="29">Faridpur</option>
            <option value="30">Feni</option>
            <option value="32">Gaibandha</option>
            <option value="33">Gazipur</option>
            <option value="35">Gopalganj</option>
            <option value="36">Habiganj</option>
            <option value="38">Joypurhat</option>
            <option value="39">Jamalpur</option>
            <option value="41">Jashore</option>
            <option value="42">Jhalokathi</option>
            <option value="44">Jhenaidah</option>
            <option value="46">Khagrachhari</option>
            <option value="47">Khulna</option>
            <option value="48">Kishorganj</option>
            <option value="49">Kurigram</option>
            <option value="50">Kushtia</option>
            <option value="51">Lakshmipur</option>
            <option value="52">Lalmonirhat</option>
            <option value="54">Madaripur</option>
            <option value="55">Magura</option>
            <option value="56">Manikganj</option>
            <option value="57">Meherpur</option>
            <option value="58">Moulavibazar</option>
            <option value="59">Munshiganj</option>
            <option value="61">Mymensingh</option>
            <option value="64">Naogaon</option>
            <option value="65">Narail</option>
            <option value="67">Narayanganj</option>
            <option value="68">Narsingdi</option>
            <option value="69">Natore</option>
            <option value="70">Chapainawabganj</option>
            <option value="72">Netrakona</option>
            <option value="73">Nilphamari</option>
            <option value="75">Noakhali</option>
            <option value="76">Pabna</option>
            <option value="77">Panchagarh</option>
            <option value="78">Patuakhali</option>
            <option value="79">Pirojpur</option>
            <option value="81">Rajshahi</option>
            <option value="82">Rajbari</option>
            <option value="84">Rangamati</option>
            <option value="85">Rangpur</option>
            <option value="86">Shariatpur</option>
            <option value="87">Satkhira</option>
            <option value="88">Sirajganj</option>
            <option value="89">Sherpur</option>
            <option value="90">Sunamganj</option>
            <option value="91">Sylhet</option>
            <option value="93">Tangail</option>
            <option value="94">Thakurgaon</option>
          </select>
          <p></p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Phone Number </td>
        <td class="txtappformbody">:</td>
        <td><input name="std_phone" type="text" id="std_phone" size="45" maxlength="14" value="{{old('std_phone')}}" class="form-control" />
          <p></p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Email Address </td>
        <td class="txtappformbody">:</td>
        <td><input name="std_email" type="text" id="std_email" size="45" value="{{old('std_email')}}" class="form-control" />
          <p></p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Upload Profile Photo, file size within 200 KB.<span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input type='hidden' name='max_file_size' value='1000000' class="form-control" />
          <input name="std_image" type="file" size="40" maxlength="100" class="form-control" />
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td class="txtappformbody">Upload Scanned Signature (Hight 100 Px and Width 300 Pixel and file size within 100 KB)<span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name='max_file_size_sign' type='hidden' id="max_file_size_sign" value='1000000' class="form-control" />
          <input name="std_sig" type="file" id="std_sig" class="form-control" />
        </td>
        <!-- <td><img src="" name="std_view_sig" width="90" height="90" id="std_view_sig" /></td> -->
      </tr>
    </table>



    <table width="100%" border="0" cellspacing="3">
      <tr>
        <td colspan="3" class="txtappformbody"> &nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" valign="top" class="txtappformbody" align="center" bgcolor="#CCCCCC"> <b>Student's Father Information</b> </td>
      </tr>
      <tr>
        <td width="20%" class="txtappformbody">&nbsp;</td>
        <td width="5%" class="txtappformbody">&nbsp;</td>
        <td width="45%" class="txtappformbody">&nbsp;</td>
        <td width="30%" class="txtappformbody">&nbsp;</td>
      </tr>



      <td>Father's Name <span class="style3">*</span> </td>
      <td class="txtappformbody">:</td>
      <td><input name="std_father_name" type="text" id="std_father_name" size="45" value="{{old('std_father_name')}}" class="form-control" />
        <p class="error text-danger">{{$errors->first('std_father_name')}}</p>
      </td>
      <td>&nbsp;</td>

      <tr class="txtappformbody">
        <td>Father's Phone Number <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_father_phone" type="text" id="std_father_phone" size="45" value="{{old('std_father_phone')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_father_phone')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Father's Occupation <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_father_occupation" type="text" id="std_father_occupation" size="45" value="{{old('std_father_occupation')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_father_occupation')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Father's Email </td>
        <td class="txtappformbody">:</td>
        <td><input name="std_father_email" type="text" id="std_father_email" size="45" value="{{old('std_father_email')}}" class="form-control" />
        </td>
        <td>&nbsp;</td>
      </tr>
    </table>





    <table width="100%" border="0" cellspacing="3">
      <tr>
        <td colspan="3" class="txtappformbody"> &nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" valign="top" class="txtappformbody" align="center" bgcolor="#CCCCCC"> <b> Student's Mother Information</b> </td>
      </tr>
      <tr>
        <td width="20%" class="txtappformbody">&nbsp;</td>
        <td width="5%" class="txtappformbody">&nbsp;</td>
        <td width="45%" class="txtappformbody">&nbsp;</td>
        <td width="30%" class="txtappformbody">&nbsp;</td>
      </tr>





      <tr class="txtappformbody">
        <td>Mother's Name <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_mother_name" type="text" id="std_mother_name" size="45" value="{{old('std_mother_name')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_mother_name')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>

      <tr class="txtappformbody">
        <td>Mother's Phone Number <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_mother_phone" type="text" id="std_mother_phone" size="45" value="{{old('std_mother_phone')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_mother_phone')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Mother's Occupation <span class="style3">*</span></td>
        <td class="txtappformbody">:</td>
        <td><input name="std_mother_occupation" type="text" id="std_mother_occupation" size="45" value="{{old('std_mother_occupation')}}" class="form-control" />
          <p class="error text-danger">{{$errors->first('std_mother_occupation')}}</p>
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr class="txtappformbody">
        <td>Mother's Email </td>
        <td class="txtappformbody">:</td>
        <td><input name="std_mother_email" type="text" id="std_mother_email" size="45" value="{{old('std_mother_email')}}" class="form-control" />
        </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>

    </table>





    <table width="100%" border="0" cellspacing="3" class="txtappformbody">

      <tr>
        <td colspan="3" valign="top" class="txtappformbody" align="center" bgcolor="#CCCCCC"><b>Password Details</b></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <td width="30%" align="right">Password <span class="style3">*</span></td>
        <td width="5%" align="center">:</td>
        <td width="65%"><input name="std_password" type="password" id="std_password" size="25" maxlength="25" value="{{old('std_password')}}" />
          <p class="error text-danger">{{$errors->first('std_password')}}</p>
        </td>
      </tr>

      <tr>
        <td align="right">Confirm password<span class="style3">*</span></td>
        <td align="center">:</td>
        <td><input name="std_repassword" type="password" id="std_repassword" size="25" maxlength="25" value="{{old('std_repassword')}}" />
          <p class="error text-danger">{{$errors->first('std_repassword')}}</p>
        </td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="center">&nbsp;</td>
        <td>
          <button type="reset" class="btn btn-danger">Reset</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
      </tr>

    </table>
  </form>

</table>







<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#006600">
  <tr>
    <td align="center">
      <font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"><strong>Developed and Maintained by ICT DIVISION</strong></font>
    </td>
  </tr>
  <tr>
    <td align="center">
     -<font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"><strong><a href="index.php">HOW TO APPLY</a> | <a href="index_apply.php">APPLY ONLINE</a> | <a href="userlogin.php">SEARCH</a> | <a href="index_edit.php">EDIT</a> | <a href="contact.php">CONTACT</a></strong></font>
    </td>
  </tr>
  <tr>
    <td align="center">
      <font color="#CCCCCC" face="Arial, Helvetica, sans-serif" size="2"><strong><a href="#">SEARCH</a> | <a href="#">EDIT</a></strong></font>
    </td>
  </tr>
  Web Master: A Rahim Khan, Sheikh Sadik Shahriyar
 Web Master Contact: +8801915140910
</table> -->






<script>
  function myFunction() {
    var x = document.getElementById("std_present_add").value;
    document.getElementById("demo").innerHTML = x;
  }
</script>
@endsection