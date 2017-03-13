@extends('layouts.layout')

@section('title', '2017資管營 | 報名表單')


@section('css')
<!-- loading -->
<link rel="stylesheet" href="{{ asset('loader/loader.css') }}" media="screen">
<!-- 引入自訂的css檔案 -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}">

<!-- 引入bootstrap和fullPage.js聯合的 -->
  <!-- test -->
  
  <!-- jquery.fullPage.css -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.fullPage.css')}}">
  
  
  
  <!-- 好像可以讓它置中 可是要再排版 -->
  <!-- jquery.fullPage.css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fullPage.css') }}" />
  <!-- examples.css 置中-->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/examples.css') }}" />


  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
 -->
  
  <!-- <script type="text/javascript" src="../vendors/scrolloverflow.js"></script> -->

  <style>
    input,textarea,select{
      color: white !important;
    }
    select option {
      color : black !important;
    }
    .section .container{
      /*background-image:url("{{asset('img/signup_bg.jpg')}}");*/
      background-color: rgba(0, 0, 0, 0.65);
      height: 80%;
    }
    legend span{
      color: #ffe9c6;
      font-family: Microsoft JhengHei !important;
    }
    label span{
      color: darkkhaki;
      font-family: Microsoft JhengHei !important;
    }
    table{
      font-size: 14;
      color: black;
    }
    .dropup{
      float:center;
    }
  </style>

@endsection


@section('js')
<!-- loading -->
<script type="text/javascript">
// setTimeout(function(){
//     $('body').addClass('loaded');
//   }, 1500);
</script>

<!-- jquery.fullPage.js -->
  <script type="text/javascript" src="{{ asset('js/jquery.fullPage.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#fullpage').fullpage({
        // 可以在此直接指定個區塊背景顏色
        // sectionsColor: ['#f2f2f2', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        anchors:['page0', 'page1','page2','page3','page4','page5','page6','page7','page8','page9','page11','page12','page13','page14'],
        scrollBar: true,
        // page0會自動讀到section0
      });
    });
  </script>

<!-- 解釋一下這是啥 -->
<script>
  $(document).ready(function()
    {
      // // Add scrollspy to <body>
      // $('body').scrollspy({target: ".navbar", offset: 50});   
      // // Add smooth scrolling on all links inside the navbar
      // $("#myNavbar a").on('click', function(event) 
      // {
      //   // Make sure this.hash has a value before overriding default behavior
      //   if (this.hash !== "") 
      //     {
      //       // Prevent default anchor click behavior
      //       event.preventDefault();
      //       // Store hash
      //       var hash = this.hash;
      //       // Using jQuery's animate() method to add smooth page scroll
      //       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      //       $('html, body').animate(
      //       {scrollTop: $(hash).offset().top},800,
      //           function()
      //             {
      //               // Add hash (#) to URL when done scrolling (default click behavior)
      //               window.location.hash = hash;
      //               }
      //       );
      //     }  // End if
      // }
      // );
  }
  );
  $("footer").css("display","none");

</script>

<script type="text/javascript">
  $(document).ready(function(){

    $("#signup").validate({
      submitHandler: function(form){
        form.submit();
      },
      errorPlacement: function(error, element){
        element.closest('.form-group').append(error);
      },
      rules: {
        name: {
          required:true
        }
        fb:{
          required:true,
          url:true
        }
        school: {
          required:true
        }

        gender:{
          required:true
        }

        birth:{
          required:true
        }
        identity:{
          required:true,
          max:10
        }
        blood:{
          required:true
        }
        email:{
          required:true,
          email:true
        }
        cellphone:{
          required:true
          max:10
        }
        phone:{
          required:true
          max:11
        }
        address:{
          required:true
        }
        parentname:{
          required:true
        }
        parentphone:{
          required:true
          max:11
        }
        relation:{
          required:true
        }
        size:{
          required:true
        }
        group:{
          required:true
        }
        // 團報名單不需要required
        food:{
          required:true
        }
        // illness不需要required
        selfintro:{
          required:true
        }
        motivation:{
          required:true
        }
        getnewsfrom:{
          required:true
        }
        


        

      }
    })
  })
</script>
@endsection

@section('content')
<!-- loading -->
<?php
    // include("loader/loader.php");
 ?>

  <div id="fullpage">
    <form id="signup" class="form-horizontal" action="{{ url('/signup') }}" method="POST">
    
    <!-- section1 page0 基本資料 姓名 臉書 學校-->
    <div class="section active" id="section1">
    <div class="container">
        <!-- 標題:基本資料 -->
        <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>基本資料</span>
            </font>
          </legend>
        </div>
        <div>
        <!-- 您的姓名 -->
        <div class="form-group">
          <label for="name" class="col-sm-3 col-form-label">
            <font size="5" style="color: black"><span>您的姓名</span></font>
          </label>
          
          <div class="col-sm-5">
              <input class="form-control" id="name" placeholder="請輸入參加者姓名" name="name" required>
          </div>
        </div>
        <!-- 個人臉書 -->
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-3 col-form-label">
            <font size="5" style="color: black"><span>個人臉書</span></font>
          </label>
          <div class="col-sm-5">
              <input class="form-control" id="inputPassword3" placeholder="請輸入facebook個人檔案頁面網址" name="fb" type="url" required>
          </div>
        </div>
        <!-- 就讀學校 -->
        <div class="form-group row">
          <label for="school" class="col-sm-3 col-form-label">
            <font size="5" style="color: black"><span>就讀學校</span></font>
          </label>
          <div class="col-sm-5">
              <input class="form-control" id="school" placeholder="請輸入學校" name="school" required>
          </div>
        </div>
        </div>
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page1" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;" type="submit">✔ 下一頁</a>
          </div>
        </div>

        <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section2 page1基本資料 性別 生日-->
    <div class="section" id="section2">
    <div class="container" >
       <div class="form-group row">
         <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>基本資料</span>
            </font>
          </legend>
        </div>
      
        <!-- 性別 -->
        <fieldset class="form-group row">
            <label class="col-form-legend col-sm-3">
              <font size="5" style="color: black"><span>性別</span></font>
            </label>
            <div class="col-sm-3">
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="gridRadios1" value="boy" name="gender" checked> 
                    <!-- 這裡是這樣家name嗎 -->
                    <font size="4" style="color: #ffffff;">男生</font>
                  </label>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="gridRadios2" value="girl" name="gender">
                    <font size="4" style="color:#ffffff;">女生</font>
                  </label>
              </div>
              </div>
            
        </fieldset>
        
        <!-- 生日 -->
        <div class="form-group row">
          <label for="birth" class="col-sm-3 col-form-legend">
            <font size="5" style="color: black"><span>你的生日</span></font>
          </label>
          <div class="col-sm-5">
          <!-- value要弄預設值嗎  -->
            <input class="form-control" type="date" id="example-date-input" name="birth" style="font-size: 4" required>
          </div>
        </div>
      
        <!-- 按鈕 -->
        <div class="form-group row">
          
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page2" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;" type="submit">✔ 下一頁</a>
              <a class="btn btn-default" href="#page0" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>

    </div>
    </div>
    

    <!-- section3 page2 基本資料 身分證字號 血型-->
    <div class="section" id="section3">
    <div class="container" >
      <div class="form-group">
        <!-- 標題:基本資料 -->
        <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>基本資料</span>
            </font>
        </legend>
      </div>
        
        <!-- 身分證字號 -->
        <div class="form-group">
          <label for="identity" class="col-sm-3 col-form-label">
            <font size="5" style="color: black"><span>身分證字號</span></font>
          </label>
          
          <div class="col-sm-5">
              <input class="form-control" id="identity" placeholder="請輸入參加者身分證字號" name="identity" type="identity" pattern="[A-Z]{1}[0-9]{9}" required>
          </div>
        </div>
        <!-- 血型 -->
        <div class="form-group">
            <label for="blood" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>你的血型</font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="blood" placeholder="請輸入你的血型" name="blood" type="blood" required>
            </div>
        </div>
        <!-- email電子信箱 -->
        <div class="form-group">
            <label for="email" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>電子信箱</font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="email" placeholder="name@example.com" name="email" type="email" required>
            </div>
        </div>
        
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page3" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page1" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section4 page3 聯絡方式-->
    <div class="section" id="section4">
    <div class="container" >
      <!-- 標題:聯絡方式 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>聯絡方式</span>
            </font>
        </legend>
        </div>
        
        <!-- 本人手機 -->
        <div class="form-group">
            <label for="cellphone" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>本人手機</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="inputEmail3" placeholder="範例:09xxxxxxxx" name="cellphone" pattern="[0-9]{10,10}" title="請輸入10位數手機號碼" required>
            </div>
        </div>
        <!-- 家用電話 -->
        <div class="form-group">
            <label for="phone" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>家用電話</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="phone" placeholder="範例:04-xxxxxxxx(請輸入區碼)" name="phone" type="phone" pattern="[0-9]{2,3}[-][0-9]{6,10}" title="請輸入包含區碼之電話" required>
            </div>
        </div>
        <!-- 通訊地址 -->
        <div class="form-group">
            <label for="address" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>通訊地址</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="address" placeholder="請輸入聯絡地址" name="address" type="address" required>
            </div>
        </div>
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page4" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page2" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>
    
    <!-- section5 page4 緊急連絡方式-->
    <div class="section" id="section5">
    <div class="container" >
      <!-- 標題:緊急連絡方式 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-6 title">
            <font size="18" color=#331f00 >
              <span>緊急聯絡方式</span>
            </font>
        </legend>
        </div>
      
        <!-- 緊急連絡人姓名 -->
        <div class="form-group">
            <label for="parentname" class="col-sm-5 col-form-label">
              <font size="5" style="color: black"><span>緊急聯絡人姓名</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="parentname" placeholder="請輸入姓名" name="parentname" type="parentname" required>
            </div>
        </div>
        <!-- 緊急連絡人電話 -->
        <div class="form-group">
            <label for="parentphone" class="col-sm-5 col-form-label">
              <font size="5" style="color: black"><span>緊急聯絡人手機</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="parentphone" placeholder="請輸入電話" name="parentphone" type="parentphone" pattern="[0-9]{10,10}" title="請輸入10位數手機號碼" required>
            </div>
        </div>
        <!-- 與緊急連絡人的關係 -->
        <div class="form-group">
            <label for="relation" class="col-sm-5 col-form-label">
              <font size="5" style="color: black"><span>與緊急聯絡人關係</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="relation" placeholder="ex:父子" name="relation" type="relation" required>
            </div>
        </div>
      
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page5" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page3" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section6 page5 衣服尺寸-->
    <div class="section" id="section6">
    <div class="container" >
      <!-- 標題:衣服尺寸 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18">
              <span>衣服尺寸</span>
            </font>
        </legend>
        </div>
        
        <div class="col-sm-11">
        <table class="table table-bordered">
          <thead>
            <tr class="warning">
              <th><center><b>尺寸</b></center></th>
              <th><center>XS</center></th>
              <th><center>S</center></th>
              <th><center>M</center></th>
              <th><center>L</center></th>
              <th><center>XL</center></th>
              <th><center>2L</center></th>
              <th><center>3L</center></th>
              <th><center>5L</center></th>
            </tr>
          </thead>
          <tbody>
            <tr class="warning">
              <td><b>衣長</b></td>
              <td>62</td>
              <td>65</td>
              <td>69</td>
              <td>72</td>
              <td>74</td>
              <td>77</td>
              <td>80</td>
              <td>80</td>
            </tr>
            <tr class="warning">
              <td><b>胸圍</b></td>
              <td>45</td>
              <td>48</td>
              <td>51</td>
              <td>53</td>
              <td>56</td>
              <td>61</td>
              <td>64</td>
              <td>68</td>
            </tr>
            <tr class="warning">
              <td><b>袖長</b></td>
              <td>19</td>
              <td>20</td>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
            </tr>
          </tbody>
        </table>
        
        </div>
        <!-- 請選擇尺寸 下拉選單 -->
        <!-- 這裡要怎麼用name=size? -->
        
        <div class="form-group">
        <label for="address" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>衣服尺寸</span></font>
        </label>
        <div class="col-sm-5">
        <select name="size" class="form-control">
            <option selected>請選擇尺寸</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="2L">2L</option>
            <option value="3L">3L</option>
            <option value="5L">5L</option>
        </select>
        </div>
      </div>
      
      <!-- 按鈕 -->
      <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page6" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page4" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section7 page6 團體報名-->
    <div class="section" id="section7">
    <div class="container" >
      <!-- 標題:團體報名 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18">
              <span>團體報名</span>
            </font>
        </legend>
        </div>
        
        
        <!-- 是否團報的radio button -->
        <fieldset class="form-group row">
            <!-- radiobutton的問題 -->
            <label class="col-form-label col-sm-3">
              <font size="5" style="color: black"><span>是否團報</span></font>
            </label>
            <!-- 包起來是與否 -->
            <div class="col-sm-5">
              <!-- 無 -->
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="none" value="none" name="group" checked>
                      <font size="4" style="color: #ffffff;">無</font>
                  </label>
              </div>
              <!-- 兩人 -->
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="two" value="two" name="group">
                    <font size="4" style="color: #ffffff;">兩人團報</font>
                  </label>
              </div>
              <!-- 四人 -->
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" id="four" value="four" name="group">
                    <font size="4" style="color: #ffffff;">四人團報</font>
                  </label>
              </div>
            </div>
        </fieldset>
        <!-- 看要不要縮減成一個問題就好 -->
        
        <!-- 輸入團報名單 -->
        <div class="form-group">
            <label for="groupname" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>團報名單</span></font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="groupname" placeholder="請輸入團報的同學姓名" name="groupname">
            </div>
        </div>
       
        <!-- 按鈕 -->
      <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page7" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page5" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section8 page7 飲食習慣-->
    <div class="section" id="section8">
    <div class="container" >
      <!-- 標題:飲食習慣 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>飲食習慣</span>
            </font>
        </legend> 
        </div>
        
        <!-- 飲食習慣的radio button -->
        <fieldset class="form-group row">
        <label for="food" class="col-sm-5 col-form-label">
            <font size="5"><span>請選擇飲食習慣</font>
          </label>
          <!-- 包起來的radio button -->
            <div class="col-sm-3">
            <!-- 是這樣加name="food"嗎 -->
              <!-- 葷食 -->
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="gridRadios1" value="meat" name="food" checked>
                    <font size="4" style="color: #ffffff;">葷食</font>
                  </label>
              </div>
              <!-- 素食 -->
              <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio"  id="gridRadios3" value="veg" name="food">
                    <font size="4" style="color: #ffffff;">素食</font>
                  </label>
              </div>
            </div>
        </fieldset>
        

        
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page8" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page6" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section9 page8 特殊疾病-->
    <div class="section" id="section9">
    <div class="container" >
      <!-- 標題:特殊疾病 -->
      <div class="form-group row">
          <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>特殊疾病</span>
            </font>
        </legend> 
        </div>
        
        <!-- 需特別注意 -->
        <div class="form-group row">
            <label for="illness" class="col-sm-3 col-form-label">
              <font size="5" style="color: black"><span>需特別注意</font>
            </label>
            <div class="col-sm-5">
              <input class="form-control" id="illness" placeholder="請詳細描述以讓我們能夠密切注意^^" name="illness">
            </div>
        </div>
        
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page9" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page7" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section11 page10 自我介紹-->
    <div class="section" id="section11">
    <div class="container" >
      <!-- 標題:自我介紹 -->
      <div class="form-group">
           <legend class="col-form-legend col-sm-4 title">
            <font size="18" color=#331f00 >
              <span>自我介紹</span>
            </font>
        </legend> 
        </div>
        <!-- 介紹一下自己吧 -->
        
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <textarea class="form-control" id="exampleTextarea" rows="" placeholder="介紹一下自己吧!" name="selfintro" required></textarea>
          </div>
        </div>
        
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page11" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page8" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section12 page11 參加動機-->
    <div class="section" id="section12">
    <div class="container" >
      <!-- 標題:參加動機以及期許 -->
      <div class="form-group">
          <legend class="col-form-legend col-sm-8 title">
            <font size="18" color=#331f00 >
              <span>參加動機以及期許</span>
            </font>
        </legend> 
        </div>
        
        <!-- 打字的地方 -->
        <div class="form-group row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
          <textarea class="form-control" id="exampleTextarea" rows="" placeholder="為什麼想要參加以及想從中獲得什麼" name="motivation" required></textarea>
            </div>
        </div>
        
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <a class="btn btn-default" href="#page12" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page9" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
          </div>
      </div>
       <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
    </div>
    </div>

    <!-- section13 page12 如何得知活動訊息-->
    <div class="section" id="section13">
    <div class="container" >
      <!-- 標題:如何得知中央資管營消息? -->
      <fieldset class="form-group">
        <div class="form-group">
          <legend class="col-form-legend col-sm-12 title">
            <font size="18" color=#331f00 >
              <span>如何得知中央資管營消息</span>
            </font>
          </legend> 
        </div>
        
        <div class="form-group">
          <label for="illness" class="col-sm-3 col-form-label">
            <font size="5" style="color: black"><span>消息來源</font>
          </label>
        </div>        
          <!-- name要怎麼加 -->
          
            <!-- 晨間宣傳 -->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="getnewsfrom" value="晨間宣傳" checked>
                <font size="4" style="color: #ffffff;">晨間宣傳</font>
              </label>
            </div>
            <!-- 學校推薦 -->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="getnewsfrom" value="學校推薦">
                <font size="4" style="color: #ffffff;">學校推薦</font>
              </label>
            </div>
            <!-- 朋友推薦  -->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="getnewsfrom" value="朋友推薦">
                <font size="4" style="color: #ffffff;">朋友推薦</font>
              </label>
            </div>
            <!-- 親人推薦 -->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="getnewsfrom" value="親人推薦">
                <font size="4" style="color: #ffffff;">親人推薦</font>
              </label>
            </div>
            <!-- 中央聯合營隊網站-->
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="getnewsfrom" value="中央聯合營隊網站">
                <font size="4" style="color: #ffffff;">中央聯合營隊網站</font>
              </label>
            </div>
          
          
          <!-- 按鈕 -->
          <div class="form-group row">
            <div class="col-sm-10">
                <a class="btn btn-default" href="#page13" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">✔ 下一頁</a>
              <a class="btn btn-default" href="#page11" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #000000;">返回</a>
            </div>
          </div>
           <!-- 頁面選擇 -->
        <div class="btn-group dropup">
          <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false" style="background-color: #1a1a1a"><font color="darkkhaki">─ 點我選擇頁面 ─</font></button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#page0">基本資料1</a></li>
            <li><a href="#page1">基本資料2</a></li>
            <li><a href="#page2">基本資料3</a></li>
            <li><a href="#page3">聯絡方式</a></li>
            <li><a href="#page4">緊急連絡方式</a></li>
            <li><a href="#page5">衣服尺寸</a></li>
            <li><a href="#page6">團體報名</a></li>
            <li><a href="#page7">飲食習慣</a></li>
            <li><a href="#page8">特殊疾病</a></li>
            <li><a href="#page9">自我介紹</a></li>
            <li><a href="#page11">參加動機</a></li>
            <li><a href="#page12">活動消息</a></li>
            <li><a href="#page13">送出表單</a></li>
          </ul>
        </div>
      </fieldset>
    </div>
    </div>

    <!-- section14 page13 確定送出資料-->
    <div class="section" id="section14">
    <div class="container" >
      <br>
      <br>
      <br>
      <br>
      <!-- 大標題:確認送出表單? -->
      <div class="form-group">
          <legend class="col-form-legend col-sm-13">
            <font size="15"><span>確認送出報名表單?</span></font>
          </legend>
        </div>
        <!-- 按鈕 -->
        <div class="form-group row">
          <div class="col-sm-10">
              <input type="hidden" name="_token" value="{{csrf_token()}}"/>
              <input class="btn btn-default" role="button" style="background-color: #1a1a1a; color: #ffffff;" type="submit" value="確認提交" onclick="javascript:self.location.href="{{ url('signup/thanks.php') }}">
              <a class="btn btn-default" href="#page0" role="button" style="background-color:#1a1a1a; color: #ffffff;">從頭檢查</a>
          </div>
      </div>
    </div>
    </div>

              
          

    <!-- section15 page14 感謝填寫 -->
<!--     <div class="section" id="section15">
    <div class="container" >
      
      <div class="form-group">
          <legend class="col-form-legend col-sm-11">
            <font size="15"><span>謝謝你的報名!</span></font>
          </legend>
        </div>
        
        <div class="form-group row">
          <div class="col-sm-10">
            
              <a class="btn btn-default" href="#page0" role="button" style="background-color: rgba(253, 224, 179, 0.72); color: #ffffff;">返回首頁</a>
          </div>
      </div>
    </div>
    </div> -->

    </form>
  </div>





@endsection

