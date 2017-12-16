<div class="container text-center">
  <form method="post">
    <input type="hidden" name="AuthSure" value="1">
    <div class="well col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
      <h4>尊敬的<font color="blue" style="font-weight:bolder;font-size:20;"><?php echo $_SESSION[Prefix.'UserName']; ?></font>：您将要授权<br>[<font style="font-weight:bolder;color:#D500F9;"><?php echo $ModuleName; ?></font>]<br>访问您的个人资料，请确认授权！</h4>
      <hr>
      <input type="submit" class="btn btn-success" style="width:98%" value="授 权">
    </div>
  </form>
</div>