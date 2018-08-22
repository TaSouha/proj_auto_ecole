
                <tr id="edit/{{$value->id}}" style="visibility: hidden;">

              <form action="/proj_auto_ecole/public/update_depense/{{ $value->id}}" method="POST" data-parsley-validate>
{{ csrf_field() }}
{{ method_field('PATCH') }}
                    <td>    <!-- Date -->
               Date d'aujordhui
                
             
              <!-- /.form group --></td>
                  <td><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{$value->Montant}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </td>




                   <td><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Mode_paiement" class="form-control pull-right"value="{{$value->Mode_paiement}}"></div>
                         @if ($errors->has('Mode_paiement'))
                                   
                    <strong class="help-block">{{ $errors->first('Mode_paiement') }}</strong><br>
                                   
                 @endif
                </td>
                   
                  
                  <td><textarea type="text" name="Designations" class="form-control pull-right" value="{{$value->Designations}}" >{{$value->Designations}}</textarea>
                       @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                 @endif</td>
                  <td><input type="submit" class="btn btn-primary" name="submit" value="Modifier">
                  </td>
                </form>
                </tr>




                  <tr id="create" style="visibility: hidden;">

                  <form action="/proj_auto_ecole/public/store_alerte_vidange/{{$id}}" method="POST" >
                    {{ csrf_field() }}
                    <th>    <!-- Date -->


                    Date d'aujordhui
             <!--
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="Date" name="Date" class="form-control pull-right" id="datepicker" value="{{old('Date')}}">
                </div>-->
                <!-- /.input group -->
             
              <!-- /.form group --></th>
                  <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Montant" class="form-control pull-right" value="{{old('Montant')}}"></div>
                 @if ($errors->has('Montant'))
                                   
                    <strong class="help-block">{{ $errors->first('Montant') }}</strong><br>
                                   
                 @endif
                  
                </th>




                   <th><div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-dollar"></i>
                  </div><input type="text" name="Mode_paiement" class="form-control pull-right"value="{{old('Mode_paiement')}}"></div>
                         @if ($errors->has('Mode_paiement'))
                                   
                    <strong class="help-block">{{ $errors->first('Mode_paiement') }}</strong><br>
                                   
                 @endif
                </th>
                   
                  
                  <th><textarea name="Designations" class="form-control pull-right" value="{{old('Designations')}}">{{old('Designations')}}</textarea>
                       @if ($errors->has('Designations'))
                                   
                    <strong class="help-block">{{ $errors->first('Designations') }}</strong><br>
                                   
                 @endif</th>
                  <th><input type="submit" class="btn btn-primary" name="submit" value="Ajouter">
                  </th>
                </form>
                </tr>