
<script src="../modules/articulos/jsbarcode/CODE128.js"></script>
<script src="../modules/articulos/jsbarcode/JsBarcode.js"></script>


<form id="form-articulos">

                <ul class="nav nav-tabs nav-tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab_info_basica">Info. Básica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab_precios">Precios</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    
                    <div class="tab-pane fade show active" id="tab_info_basica" role="tabpanel">

                        <div class="row">   
                            <div class="form-group col-md-12">
                                <label>Nombre<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingrese nombre" name="nombre_articulo" id="nombre_articulo" maxlength="200" />
                            </div>
                          
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Código de barras<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingrese código de barras" name="codigo_barras_articulo" id="codigo_barras_articulo" maxlength="200" />
                            </div>

                            <div class="form-group col-md-6">
                                <img id="barcode_cod"/>
                            </div>     
                        </div>


                        <div class="row">   
                            <div class="form-group col-md-6">
                                <label>Descripción</label>
                                <input type="text" class="form-control" placeholder="Ingrese descripción" name="desc_articulo" id="desc_articulo" maxlength="500" />
                            </div>

                            <div class="form-group col-md-6">
                                <label>Número de serie<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingrese número de serie" name="numero_serie_articulo" id="numero_serie_articulo" maxlength="200" />
                            </div>
                          
                        </div>



                        <div class="row">

                            <div class="form-group col-md-6">
                                <label>Marca<span class="text-danger">*</span></label>
                                <select class="form-control select2" id="id_marca" name="id_marca" style="width: 100%;">
                                    <option value="" disabled selected>Seleccione</option>

                                    <?php foreach ($articulosmarca as $v): ?>
                                        <option value="<?= $v->id_marca ?>"><?= $v->nombre_marca?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>


                            <div class="form-group col-md-6">
                                <label>Categoria<span class="text-danger">*</span></label>
                                <select class="form-control select2" id="id_categoria" name="id_categoria" style="width: 100%;">
                                    <option value="" disabled selected>Seleccione</option>

                                    <?php foreach ($articuloscategoria as $v): ?>
                                        <option value="<?= $v->id_categoria ?>"><?= $v->nombre_categoria?></option>
                                    <?php endforeach; ?>

                                </select>
                            </div>    
                        </div> 
                        
                    </div>







                    <div class="tab-pane fade" id="tab_precios" role="tabpanel">


                        <div class="row">

                            <div class="form-group col-md-6">

                                <label>Precio de venta</label>
                                <input checked style="width:10%" type="radio" name="radio_tipos_precios" id="radio_precio_venta"/>
                            </div> 

                            <div class="form-group col-md-6">

                                <label style="margin-top: -10px;">Precio bruto</label>
                                
                                <input style="width:10%;" type="radio" name="radio_tipos_precios" id="radio_precio_bruto"/> 
                            </div>
                        </div>

                        <div class="row">   
                            <div class="form-group col-md-6">

                                <label>Precio Unitario<span class="text-danger">*</span></label>
                                <input type="number" class="form-control" placeholder="Ingrese precio unitario" name="valor_articulo" id="valor_articulo"/>
                            </div>
                          
                            <div class="form-group col-md-6">

                                <label>% de aumento</label>
                                <input type="number" class="form-control" placeholder="Ingrese % de aumento" name="porcentaje_aumento_articulo" id="porcentaje_aumento_articulo"/>
                            </div>
                        </div>


                        <div class="row">   
                            <div class="form-group col-md-4">

                                <label>Precio bruto</label>
                                <input type="number" disabled class="form-control" name="precio_bruto_articulo" id="precio_bruto_articulo"/>
                            </div>

                            <div class="form-group col-md-4">

                                <label>IGV</label>
                                <input type="number" disabled class="form-control" name="igv_articulo" id="igv_articulo"/>
                            </div>

                            <div class="form-group col-md-4">

                                <label>Precio venta al público</label>
                                <input type="number" disabled class="form-control" name="precio_venta_articulo" id="precio_venta_articulo"/>
                            </div>
                          
                        </div>
                        
                    </div>

                </div>



  
    <hr>
    <button class="btn btn-primary mr-2" id="btn-guardar">Guardar</button>
    <a class="btn btn-secondary" id="btn-cancelar">Cancelar</a>
</form>
