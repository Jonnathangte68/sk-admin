@extends('admin.layouts.admin')

@section('content')


{!! Form::open(array('route' => 'admin.text_management.store', 'method' => 'POST' , 'class' => 'form-horizontal')) !!}


<fieldset style="width: 100%;">

<!-- Form Name -->
<legend>Form Name</legend>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title1">Titulo 1</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title1" name="title1">{{ $hashmap['title1'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title2">Titulo 2</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title2" name="title2">{{ $hashmap['title2'] }}</textarea>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title3">Titulo 3</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title3" name="title3">{{ $hashmap['title3'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title4">Titulo 4</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title4" name="title4">{{ $hashmap['title4'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title5">Titulo 5</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title5" name="title5">{{ $hashmap['title5'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title6">Titulo 6</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title6" name="title6">{{ $hashmap['title6'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title7">Titulo 7</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title7" name="title7">{{ $hashmap['title7'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title8">Titulo 8</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title8" name="title8">{{ $hashmap['title8'] }}</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title9">Titulo 9</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title9" name="title9">{{ $hashmap['title9'] }}</textarea>
  </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title10">Titulo 10</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="title10" name="title10">{{ $hashmap['title10'] }}</textarea>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title11">Titulo 11</label>  
  <div class="col-md-4">
  <input id="title11" name="title11" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title11'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title12">Titulo 12</label>  
  <div class="col-md-4">
  <input id="title12" name="title12" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title12'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title13">Titulo 13</label>  
  <div class="col-md-4">
  <input id="title13" name="title13" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title13'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title14">Titulo 14</label>  
  <div class="col-md-4">
  <input id="title14" name="title14" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title14'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title15">Titulo 15</label>  
  <div class="col-md-4">
  <input id="title15" name="title15" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title15'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title16">Titulo 16</label>  
  <div class="col-md-4">
  <input id="title16" name="title16" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title16'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title12">Titulo 17</label>  
  <div class="col-md-4">
  <input id="title17" name="title17" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title17'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title18">Titulo 18</label>  
  <div class="col-md-4">
  <input id="title18" name="title18" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title18'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title19">Titulo 19</label>  
  <div class="col-md-4">
  <input id="title19" name="title19" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title19'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title20">Titulo 20</label>  
  <div class="col-md-4">
  <input id="title20" name="title20" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title20'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title21">Titulo 21</label>  
  <div class="col-md-4">
  <input id="title21" name="title21" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title21'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title22">Titulo 22</label>  
  <div class="col-md-4">
  <input id="title22" name="title22" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title22'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title23">Titulo 23</label>  
  <div class="col-md-4">
  <input id="title23" name="title23" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title23'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title24">Titulo 24</label>  
  <div class="col-md-4">
  <input id="title24" name="title24" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title24'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title25">Titulo 25</label>  
  <div class="col-md-4">
  <input id="title25" name="title25" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title25'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title26">Titulo 26</label>  
  <div class="col-md-4">
  <input id="title26" name="title26" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title26'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title27">Titulo 27</label>  
  <div class="col-md-4">
  <input id="title27" name="title27" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title27'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title28">Titulo 28</label>  
  <div class="col-md-4">
  <input id="title28" name="title28" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title28'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title29">Titulo 29</label>  
  <div class="col-md-4">
  <input id="title29" name="title29" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title29'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title30">Titulo 30</label>  
  <div class="col-md-4">
  <input id="title30" name="title30" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title30'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title31">Titulo 31</label>  
  <div class="col-md-4">
  <input id="title31" name="title31" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title31'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title32">Titulo 32</label>  
  <div class="col-md-4">
  <input id="title32" name="title32" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title32'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title33">Titulo 33</label>  
  <div class="col-md-4">
  <input id="title33" name="title33" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title33'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title34">Titulo 34</label>  
  <div class="col-md-4">
  <input id="title34" name="title34" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title34'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title35">Titulo 35</label>  
  <div class="col-md-4">
  <input id="title35" name="title35" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title35'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title36">Titulo 36</label>  
  <div class="col-md-4">
  <input id="title36" name="title36" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title36'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title37">Titulo 37</label>  
  <div class="col-md-4">
  <input id="title37" name="title37" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title37'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title38">Titulo 38</label>  
  <div class="col-md-4">
  <input id="title38" name="title38" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title38'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title39">Titulo 39</label>  
  <div class="col-md-4">
  <input id="title39" name="title39" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title39'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title40">Titulo 40</label>  
  <div class="col-md-4">
  <input id="title40" name="title40" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title40'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title41">Titulo 41</label>  
  <div class="col-md-4">
  <input id="title41" name="title41" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title41'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title42">Titulo 42</label>  
  <div class="col-md-4">
  <input id="title42" name="title42" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title42'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title43">Titulo 43</label>  
  <div class="col-md-4">
  <input id="title43" name="title43" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title43'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title44">Titulo 44</label>  
  <div class="col-md-4">
  <input id="title44" name="title44" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title44'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title45">Titulo 45</label>  
  <div class="col-md-4">
  <input id="title45" name="title45" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title45'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title46">Titulo 46</label>  
  <div class="col-md-4">
  <input id="title46" name="title46" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title46'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title47">Titulo 47</label>  
  <div class="col-md-4">
  <input id="title47" name="title47" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title47'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title48">Titulo 48</label>  
  <div class="col-md-4">
  <input id="title48" name="title48" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title48'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title49">Titulo 49</label>  
  <div class="col-md-4">
  <input id="title49" name="title49" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title49']}}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title50">Titulo 50</label>  
  <div class="col-md-4">
  <input id="title50" name="title50" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title50'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title51">Titulo 51</label>  
  <div class="col-md-4">
  <input id="title51" name="title51" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title51'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title52">Titulo 52</label>  
  <div class="col-md-4">
  <input id="title52" name="title52" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title52'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title53">Titulo 53</label>  
  <div class="col-md-4">
  <input id="title53" name="title53" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title53'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title54">Titulo 54</label>  
  <div class="col-md-4">
  <input id="title54" name="title54" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title54'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title55">Titulo 55</label>  
  <div class="col-md-4">
  <input id="title55" name="title55" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title55'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title56">Titulo 56</label>  
  <div class="col-md-4">
  <input id="title56" name="title56" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title56'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title57">Titulo 57</label>  
  <div class="col-md-4">
  <input id="title57" name="title57" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title57']}}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title58">Titulo 58</label>  
  <div class="col-md-4">
  <input id="title58" name="title58" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title58'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title59">Titulo 59</label>  
  <div class="col-md-4">
  <input id="title59" name="title59" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title59'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title60">Titulo 60</label>  
  <div class="col-md-4">
  <input id="title60" name="title60" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title60'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title61">Titulo 61</label>  
  <div class="col-md-4">
  <input id="title61" name="title61" placeholder="placeholder" class="form-control input-md" type="text" value="{{  $hashmap['title61'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title62">Titulo 62</label>  
  <div class="col-md-4">
  <input id="title62" name="title62" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title62'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title63">Titulo 63</label>  
  <div class="col-md-4">
  <input id="title63" name="title63" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title63'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title64">Titulo 64</label>  
  <div class="col-md-4">
  <input id="title64" name="title64" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title64'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title65">Titulo 65</label>  
  <div class="col-md-4">
  <input id="title65" name="title65" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title65'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title66">Titulo 66</label>  
  <div class="col-md-4">
  <input id="title66" name="title66" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title66'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title67">Titulo 67</label>  
  <div class="col-md-4">
  <input id="title67" name="title67" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title67'] }}">
  <span class="help-block">help</span>  
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title68">Titulo 68</label>  
  <div class="col-md-4">
  <input id="title68" name="title68" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title68'] }}">
  <span class="help-block">help</span>  
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title69">Titulo 69</label>  
  <div class="col-md-4">
  <input id="title69" name="title69" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title69'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title70">Titulo 70</label>  
  <div class="col-md-4">
  <input id="title70" name="title70" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title70'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title71">Titulo 71</label>  
  <div class="col-md-4">
  <input id="title71" name="title71" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title71'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title72">Titulo 72</label>  
  <div class="col-md-4">
  <input id="title72" name="title72" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title72'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title73">Titulo 73</label>  
  <div class="col-md-4">
  <input id="title73" name="title73" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title73'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title74">Titulo 74</label>  
  <div class="col-md-4">
  <input id="title74" name="title74" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title74'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title75">Titulo 75</label>  
  <div class="col-md-4">
  <input id="title75" name="title75" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title75'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title76">Titulo 76</label>  
  <div class="col-md-4">
  <input id="title76" name="title76" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title76'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title77">Titulo 77</label>  
  <div class="col-md-4">
  <input id="title77" name="title77" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title77'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title78">Titulo 78</label>  
  <div class="col-md-4">
  <input id="title78" name="title78" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title78'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title79">Titulo 79</label>  
  <div class="col-md-4">
  <input id="title79" name="title79" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title79'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title80">Titulo 80</label>  
  <div class="col-md-4">
  <input id="title80" name="title80" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title80'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title81">Titulo 81</label>  
  <div class="col-md-4">
  <input id="title81" name="title81" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title81'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title82">Titulo 82</label>  
  <div class="col-md-4">
  <input id="title82" name="title82" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title82'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title83">Titulo 83</label>  
  <div class="col-md-4">
  <input id="title83" name="title83" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title83'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title84">Titulo 84</label>  
  <div class="col-md-4">
  <input id="title84" name="title84" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title84'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title85">Titulo 85</label>  
  <div class="col-md-4">
  <input id="title85" name="title85" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title85'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title86">Titulo 86</label>  
  <div class="col-md-4">
  <input id="title86" name="title86" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title86'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title87">Titulo 87</label>  
  <div class="col-md-4">
  <input id="title87" name="title87" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title87'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title88">Titulo 88</label>  
  <div class="col-md-4">
  <input id="title88" name="title88" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title88'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title89">Titulo 89</label>  
  <div class="col-md-4">
  <input id="title89" name="title89" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title89'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title90">Titulo 90</label>  
  <div class="col-md-4">
  <input id="title90" name="title90" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title90'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title91">Titulo 91</label>  
  <div class="col-md-4">
  <input id="title91" name="title91" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title91'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title92">Titulo 92</label>  
  <div class="col-md-4">
  <input id="title92" name="title92" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title92'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title93">Titulo 93</label>  
  <div class="col-md-4">
  <input id="title93" name="title93" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title93'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title94">Titulo 94</label>  
  <div class="col-md-4">
  <input id="title94" name="title94" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title94'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title95">Titulo 95</label>  
  <div class="col-md-4">
  <input id="title95" name="title95" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title95'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title96">Titulo 96</label>  
  <div class="col-md-4">
  <input id="title96" name="title96" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title96'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title97">Titulo 97</label>  
  <div class="col-md-4">
  <input id="title97" name="title97" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title97'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- 
-->

<!-- Talent Favs -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title98">Titulo 98</label>  
  <div class="col-md-4">
  <input id="title98" name="title98" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title98'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title99">Titulo 99</label>  
  <div class="col-md-4">
  <input id="title99" name="title99" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title99'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title100">Titulo 100</label>  
  <div class="col-md-4">
  <input id="title100" name="title100" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title100'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title101">Titulo 101</label>  
  <div class="col-md-4">
  <input id="title101" name="title101" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title101'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title102">Titulo 102</label>  
  <div class="col-md-4">
  <input id="title102" name="title102" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title102'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title103">Titulo 103</label>  
  <div class="col-md-4">
  <input id="title103" name="title103" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title103'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title104">Titulo 104</label>  
  <div class="col-md-4">
  <input id="title104" name="title104" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title104'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title105">Titulo 105</label>  
  <div class="col-md-4">
  <input id="title105" name="title105" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title105'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- home talent -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title106">Titulo 106</label>  
  <div class="col-md-4">
  <input id="title106" name="title106" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title106'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title107">Titulo 107</label>  
  <div class="col-md-4">
  <input id="title107" name="title107" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title107'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title108">Titulo 108</label>  
  <div class="col-md-4">
  <input id="title108" name="title108" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title108'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title109">Titulo 109</label>  
  <div class="col-md-4">
  <input id="title109" name="title109" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title109'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title110">Titulo 110</label>  
  <div class="col-md-4">
  <input id="title110" name="title110" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title110'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title111">Titulo 111</label>  
  <div class="col-md-4">
  <input id="title111" name="title111" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title111'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Chat -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title112">Titulo 112</label>  
  <div class="col-md-4">
  <input id="title112" name="title112" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title112'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title113">Titulo 113</label>  
  <div class="col-md-4">
  <input id="title113" name="title113" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title113'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title114">Titulo 114</label>  
  <div class="col-md-4">
  <input id="title114" name="title114" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title114'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title115">Titulo 115</label>  
  <div class="col-md-4">
  <input id="title115" name="title115" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title115'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title116">Titulo 116</label>  
  <div class="col-md-4">
  <input id="title116" name="title116" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title116'] }}">
  <span class="help-block">help</span>  
  </div>
</div>



<!-- Navbar -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title117">Titulo 117</label>  
  <div class="col-md-4">
  <input id="title117" name="title117" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title117'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title118">Titulo 118</label>  
  <div class="col-md-4">
  <input id="title118" name="title118" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title118'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title119">Titulo 119</label>  
  <div class="col-md-4">
  <input id="title119" name="title119" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title119'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title120">Titulo 120</label>  
  <div class="col-md-4">
  <input id="title120" name="title120" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title120'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title121">Titulo 121</label>  
  <div class="col-md-4">
  <input id="title121" name="title121" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title121'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title122">Titulo 122</label>  
  <div class="col-md-4">
  <input id="title122" name="title122" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title122'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- tpostsignup -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title123">Titulo 123</label>  
  <div class="col-md-4">
  <input id="title123" name="title123" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title123'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title124">Titulo 124</label>  
  <div class="col-md-4">
  <input id="title124" name="title124" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title124'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title125">Titulo 125</label>  
  <div class="col-md-4">
  <input id="title125" name="title125" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title125'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title126">Titulo 126</label>  
  <div class="col-md-4">
  <input id="title126" name="title126" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title126'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title127">Titulo 127</label>  
  <div class="col-md-4">
  <input id="title127" name="title127" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title127'] }}">
  <span class="help-block">help</span>  
  </div>
</div>




<!-- Fb login -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title128">Titulo 128</label>  
  <div class="col-md-4">
  <input id="title128" name="title128" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title128'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title129">Titulo 129</label>  
  <div class="col-md-4">
  <input id="title129" name="title129" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title129'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title130">Titulo 130</label>  
  <div class="col-md-4">
  <input id="title130" name="title130" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title130'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title131">Titulo 131</label>  
  <div class="col-md-4">
  <input id="title131" name="title131" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title131'] }}">
  <span class="help-block">help</span>  
  </div>
</div>




<!-- Option 3 navbar -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title132">Titulo 132</label>  
  <div class="col-md-4">
  <input id="title132" name="title132" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title132'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title133">Titulo 133</label>  
  <div class="col-md-4">
  <input id="title133" name="title133" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title133'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title134">Titulo 134</label>  
  <div class="col-md-4">
  <input id="title134" name="title134" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title134'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title135">Titulo 135</label>  
  <div class="col-md-4">
  <input id="title135" name="title135" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title135'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title136">Titulo 136</label>  
  <div class="col-md-4">
  <input id="title136" name="title136" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title136'] }}">
  <span class="help-block">help</span>  
  </div>
</div>









<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title137">Titulo 137</label>  
  <div class="col-md-4">
  <input id="title137" name="title137" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title137'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title138">Titulo 138</label>  
  <div class="col-md-4">
  <input id="title138" name="title138" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title138'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title139">Titulo 139</label>  
  <div class="col-md-4">
  <input id="title139" name="title139" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title139'] }}">
  <span class="help-block">help</span>  
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title140">Titulo 140</label>  
  <div class="col-md-4">
  <input id="title140" name="title140" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title140'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title141">Titulo 141</label>  
  <div class="col-md-4">
  <input id="title141" name="title141" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title141'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title142">Titulo 142</label>  
  <div class="col-md-4">
  <input id="title142" name="title142" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title142'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title143">Titulo 143</label>  
  <div class="col-md-4">
  <input id="title143" name="title143" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title143'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title144">Titulo 144</label>  
  <div class="col-md-4">
  <input id="title144" name="title144" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title144'] }}">
  <span class="help-block">help</span>  
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title145">Titulo 145</label>  
  <div class="col-md-4">
  <input id="title145" name="title145" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title145'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title146">Titulo 146</label>  
  <div class="col-md-4">
  <input id="title146" name="title146" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title146'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title147">Titulo 147</label>  
  <div class="col-md-4">
  <input id="title147" name="title147" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title147'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title148">Titulo 148</label>  
  <div class="col-md-4">
  <input id="title148" name="title148" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title148'] }}">
  <span class="help-block">help</span>  
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title149">Titulo 149</label>  
  <div class="col-md-4">
  <input id="title149" name="title149" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title149'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title150">Titulo 150</label>  
  <div class="col-md-4">
  <input id="title150" name="title150" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title150'] }}">
  <span class="help-block">help</span>  
  </div>
</div>







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title151">Titulo 151</label>  
  <div class="col-md-4">
  <input id="title151" name="title151" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title151'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title152">Titulo 152</label>  
  <div class="col-md-4">
  <input id="title152" name="title152" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title152'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title153">Titulo 153</label>  
  <div class="col-md-4">
  <input id="title153" name="title153" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title153'] }}">
  <span class="help-block">help</span>  
  </div>
</div>














<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title154">Titulo 154</label>  
  <div class="col-md-4">
  <input id="title154" name="title154" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title154'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title155">Titulo 155</label>  
  <div class="col-md-4">
  <input id="title155" name="title155" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title155'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title156">Titulo 156</label>  
  <div class="col-md-4">
  <input id="title156" name="title156" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title156'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
















<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title157">Titulo 157</label>  
  <div class="col-md-4">
  <input id="title157" name="title157" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title157'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title158">Titulo 158</label>  
  <div class="col-md-4">
  <input id="title158" name="title158" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title158'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title159">Titulo 159</label>  
  <div class="col-md-4">
  <input id="title159" name="title159" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title159'] }}">
  <span class="help-block">help</span>  
  </div>
</div>










<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title160">Titulo 160</label>  
  <div class="col-md-4">
  <input id="title160" name="title160" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title160'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title161">Titulo 161</label>  
  <div class="col-md-4">
  <input id="title161" name="title161" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title161'] }}">
  <span class="help-block">help</span>  
  </div>
</div>




<!-- recruiter home mosaic -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title162">Titulo 162</label>  
  <div class="col-md-4">
  <input id="title162" name="title162" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title162'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title163">Titulo 163</label>  
  <div class="col-md-4">
  <input id="title163" name="title163" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title163'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title164">Titulo 164</label>  
  <div class="col-md-4">
  <input id="title164" name="title164" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title164'] }}">
  <span class="help-block">help</span>  
  </div>
</div>





<!-- recruiter connects -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title165">Titulo 165</label>  
  <div class="col-md-4">
  <input id="title165" name="title165" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title165'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title166">Titulo 166</label>  
  <div class="col-md-4">
  <input id="title166" name="title166" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title166'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title167">Titulo 167</label>  
  <div class="col-md-4">
  <input id="title167" name="title167" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title167'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title168">Titulo 168</label>  
  <div class="col-md-4">
  <input id="title168" name="title168" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title168'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title169">Titulo 169</label>  
  <div class="col-md-4">
  <input id="title169" name="title169" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title169'] }}">
  <span class="help-block">help</span>  
  </div>
</div>





<!-- favourites -->




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title170">Titulo 170</label>  
  <div class="col-md-4">
  <input id="title170" name="title170" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title170'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title171">Titulo 171</label>  
  <div class="col-md-4">
  <input id="title171" name="title171" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title171'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title172">Titulo 172</label>  
  <div class="col-md-4">
  <input id="title172" name="title172" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title172'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title173">Titulo 173</label>  
  <div class="col-md-4">
  <input id="title173" name="title173" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title173'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title174">Titulo 174</label>  
  <div class="col-md-4">
  <input id="title174" name="title174" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title174'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title175">Titulo 175</label>  
  <div class="col-md-4">
  <input id="title175" name="title175" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title175'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title176">Titulo 176</label>  
  <div class="col-md-4">
  <input id="title176" name="title176" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title176'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title177">Titulo 177</label>  
  <div class="col-md-4">
  <input id="title177" name="title177" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title177'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- Chat recruiter -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title178">Titulo 178</label>  
  <div class="col-md-4">
  <input id="title178" name="title178" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title178'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title179">Titulo 179</label>  
  <div class="col-md-4">
  <input id="title179" name="title179" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title179'] }}">
  <span class="help-block">help</span>  
  </div>
</div>




<!-- navbar recruiter -->
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title180">Titulo 180</label>  
  <div class="col-md-4">
  <input id="title180" name="title180" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title180'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title181">Titulo 181</label>  
  <div class="col-md-4">
  <input id="title181" name="title181" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title181'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title182">Titulo 182</label>  
  <div class="col-md-4">
  <input id="title182" name="title182" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title182'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title183">Titulo 183</label>  
  <div class="col-md-4">
  <input id="title183" name="title183" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title183'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title184">Titulo 184</label>  
  <div class="col-md-4">
  <input id="title184" name="title184" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title184'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title185">Titulo 185</label>  
  <div class="col-md-4">
  <input id="title185" name="title185" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title185'] }}">
  <span class="help-block">help</span>  
  </div>
</div>





















<!-- talent profile texts -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title186">Titulo 186</label>  
  <div class="col-md-4">
  <input id="title186" name="title186" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title186'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title187">Titulo 187</label>  
  <div class="col-md-4">
  <input id="title187" name="title187" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title187'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title188">Titulo 188</label>  
  <div class="col-md-4">
  <input id="title188" name="title188" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title188'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title189">Titulo 189</label>  
  <div class="col-md-4">
  <input id="title189" name="title189" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title189'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title189">Titulo 189</label>  
  <div class="col-md-4">
  <input id="title189" name="title189" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title189'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title190">Titulo 190</label>  
  <div class="col-md-4">
  <input id="title190" name="title190" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title190'] }}">
  <span class="help-block">help</span>  
  </div>
</div><!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title191">Titulo 191</label>  
  <div class="col-md-4">
  <input id="title191" name="title191" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title191'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title192">Titulo 192</label>  
  <div class="col-md-4">
  <input id="title192" name="title192" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title192'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title193">Titulo 193</label>  
  <div class="col-md-4">
  <input id="title193" name="title193" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title193'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title194">Titulo 194</label>  
  <div class="col-md-4">
  <input id="title194" name="title194" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title194'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title195">Titulo 195</label>  
  <div class="col-md-4">
  <input id="title195" name="title195" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title195'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title196">Titulo 196</label>  
  <div class="col-md-4">
  <input id="title196" name="title196" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title196'] }}">
  <span class="help-block">help</span>  
  </div>
</div>


<!-- END -->







<!-- password  -->







<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title197">Titulo 197</label>  
  <div class="col-md-4">
  <input id="title197" name="title197" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title197'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title198">Titulo 198</label>  
  <div class="col-md-4">
  <input id="title198" name="title198" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title198'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title199">Titulo 199</label>  
  <div class="col-md-4">
  <input id="title199" name="title199" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title199'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title200">Titulo 200</label>  
  <div class="col-md-4">
  <input id="title200" name="title200" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title200'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title201">Titulo 201</label>  
  <div class="col-md-4">
  <input id="title201" name="title201" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title201'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title202">Titulo 202</label>  
  <div class="col-md-4">
  <input id="title202" name="title202" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title202'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- add on alerts -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title203">Titulo 203</label>  
  <div class="col-md-4">
  <input id="title203" name="title203" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title203'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title204">Titulo 204</label>  
  <div class="col-md-4">
  <input id="title204" name="title204" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title204'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title205">Titulo 205</label>  
  <div class="col-md-4">
  <input id="title205" name="title205" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title205'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title206">Titulo 206</label>  
  <div class="col-md-4">
  <input id="title206" name="title206" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title206'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title207">Titulo 207</label>  
  <div class="col-md-4">
  <input id="title207" name="title207" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title207'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title208">Titulo 208</label>  
  <div class="col-md-4">
  <input id="title208" name="title208" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title208'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title209">Titulo 209</label>  
  <div class="col-md-4">
  <input id="title209" name="title209" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title209'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title210">Titulo 210</label>  
  <div class="col-md-4">
  <input id="title210" name="title210" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title210'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title211">Titulo 211</label>  
  <div class="col-md-4">
  <input id="title211" name="title211" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title211'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title212">Titulo 212</label>  
  <div class="col-md-4">
  <input id="title212" name="title212" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title212'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title213">Titulo 213</label>  
  <div class="col-md-4">
  <input id="title213" name="title213" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title213'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title214">Titulo 214</label>  
  <div class="col-md-4">
  <input id="title214" name="title214" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title214'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title215">Titulo 215</label>  
  <div class="col-md-4">
  <input id="title215" name="title215" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title215'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title216">Titulo 216</label>  
  <div class="col-md-4">
  <input id="title216" name="title216" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title216'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title217">Titulo 217</label>  
  <div class="col-md-4">
  <input id="title217" name="title217" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title217'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title218">Titulo 218</label>  
  <div class="col-md-4">
  <input id="title218" name="title218" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title218'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title219">Titulo 219</label>  
  <div class="col-md-4">
  <input id="title219" name="title219" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title219'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title220">Titulo 220</label>  
  <div class="col-md-4">
  <input id="title220" name="title220" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title220'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title221">Titulo 221</label>  
  <div class="col-md-4">
  <input id="title221" name="title221" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title221'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title222">Titulo 222</label>  
  <div class="col-md-4">
  <input id="title222" name="title222" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title222'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title223">Titulo 223</label>  
  <div class="col-md-4">
  <input id="title223" name="title223" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title223'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title224">Titulo 224</label>  
  <div class="col-md-4">
  <input id="title224" name="title224" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title224'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title225">Titulo 225</label>  
  <div class="col-md-4">
  <input id="title225" name="title225" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title225'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title226">Titulo 226</label>  
  <div class="col-md-4">
  <input id="title226" name="title226" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title226'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title227">Titulo 227</label>  
  <div class="col-md-4">
  <input id="title227" name="title227" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title227'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title228">Titulo 228</label>  
  <div class="col-md-4">
  <input id="title228" name="title228" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title228'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title229">Titulo 229</label>  
  <div class="col-md-4">
  <input id="title229" name="title229" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title229'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title230">Titulo 230</label>  
  <div class="col-md-4">
  <input id="title230" name="title230" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title230'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title231">Titulo 231</label>  
  <div class="col-md-4">
  <input id="title231" name="title231" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title231'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title232">Titulo 232</label>  
  <div class="col-md-4">
  <input id="title232" name="title232" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title232'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title233">Titulo 233</label>  
  <div class="col-md-4">
  <input id="title233" name="title233" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title233'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title234">Titulo 234</label>  
  <div class="col-md-4">
  <input id="title234" name="title234" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title234'] }}">
  <span class="help-block">help</span>  
  </div>
</div>









<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title235">Titulo 235</label>  
  <div class="col-md-4">
  <input id="title235" name="title235" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title235'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title236">Titulo 236</label>  
  <div class="col-md-4">
  <input id="title236" name="title236" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title236'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title237">Titulo 237</label>  
  <div class="col-md-4">
  <input id="title237" name="title237" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title237'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title238">Titulo 238</label>  
  <div class="col-md-4">
  <input id="title238" name="title238" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title238'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title239">Titulo 239</label>  
  <div class="col-md-4">
  <input id="title239" name="title239" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title239'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title240">Titulo 240</label>  
  <div class="col-md-4">
  <input id="title240" name="title240" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title240'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title241">Titulo 241</label>  
  <div class="col-md-4">
  <input id="title241" name="title241" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title241'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title242">Titulo 242</label>  
  <div class="col-md-4">
  <input id="title242" name="title242" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title242'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title243">Titulo 243</label>  
  <div class="col-md-4">
  <input id="title243" name="title243" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title243'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title244">Titulo 244</label>  
  <div class="col-md-4">
  <input id="title244" name="title244" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title244'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title245">Titulo 245</label>  
  <div class="col-md-4">
  <input id="title245" name="title245" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title245'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title246">Titulo 246</label>  
  <div class="col-md-4">
  <input id="title246" name="title246" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title246'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title247">Titulo 247</label>  
  <div class="col-md-4">
  <input id="title247" name="title247" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title247'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title248">Titulo 248</label>  
  <div class="col-md-4">
  <input id="title248" name="title248" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title248'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title249">Titulo 249</label>  
  <div class="col-md-4">
  <input id="title249" name="title249" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title249'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title250">Titulo 250</label>  
  <div class="col-md-4">
  <input id="title250" name="title250" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title250'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title251">Titulo 251</label>  
  <div class="col-md-4">
  <input id="title251" name="title251" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title251'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title252">Titulo 252</label>  
  <div class="col-md-4">
  <input id="title252" name="title252" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title252'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title253">Titulo 253</label>  
  <div class="col-md-4">
  <input id="title253" name="title253" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title253'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title254">Titulo 254</label>  
  <div class="col-md-4">
  <input id="title254" name="title254" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title254'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title255">Titulo 255</label>  
  <div class="col-md-4">
  <input id="title255" name="title255" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title255'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title256">Titulo 256</label>  
  <div class="col-md-4">
  <input id="title256" name="title256" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title256'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title257">Titulo 257</label>  
  <div class="col-md-4">
  <input id="title257" name="title257" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title257'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title258">Titulo 258</label>  
  <div class="col-md-4">
  <input id="title258" name="title258" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title258'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title259">Titulo 259</label>  
  <div class="col-md-4">
  <input id="title259" name="title259" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title259'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title260">Titulo 260</label>  
  <div class="col-md-4">
  <input id="title260" name="title260" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title260'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title261">Titulo 261</label>  
  <div class="col-md-4">
  <input id="title261" name="title261" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title261'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title262">Titulo 262</label>  
  <div class="col-md-4">
  <input id="title262" name="title262" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title262'] }}">
  <span class="help-block">help</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title263">Titulo 263</label>  
  <div class="col-md-4">
  <input id="title263" name="title263" placeholder="placeholder" class="form-control input-md" type="text" value="{{ $hashmap['title263'] }}">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- SEPARATOR -->









<div style="text-align: center;">
<button type="submit" class="btn btn-primary">Guardar</button>  
</div>



</fieldset>

<!-- Modal -->
<div id="waitModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <p>Changes are being saved please wait!</p>
      </div>
    </div>

  </div>
</div>


{!! Form::close() !!}




@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection





<script type="text/javascript">
  $('.btn-primary').click(function(){

    $('#waitModal').modal('show');

    /*alert('Saving changes!');

    let timerInterval;
        Swal.fire({
          title: 'Saving changes!',
          html: 'Please wait.',
          timer: 1000000000000000,
          onBeforeOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(() => {
              Swal.getContent().querySelector('strong')
                .textContent = Swal.getTimerLeft()
            }, 100)
          },
          onClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.timer
          ) {
            console.log('I was closed by the timer')
          }
        });*/
  });
</script>