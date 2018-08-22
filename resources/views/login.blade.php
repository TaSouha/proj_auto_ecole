   
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="/proj_auto_ecole/public/loginme" method="post">
                 {{ csrf_field() }}
            
                  <label >Email</label>

                  
                    <input name="email" >
                  
               @if ($errors->has('email'))
                                   
                    <strong >{{ $errors->first('email') }}</strong><br>
                                   
                 @endif
                  
                  <label >Password</label>

                 
                    <input type="password" name="password">
          
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
      
          <!-- /.box -->