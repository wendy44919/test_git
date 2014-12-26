

<div class="order-create orders-template">
	<!-- /// Page header     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="page-header">
		<div class="page-title">
			<h2>預約訂單</h2>
		</div>
		<div class="button-header">
			<input type="button" value="回上一頁">
			<input type="button" value="查詢大表">
			<input type="button" value="查詢小表">
			<button class="btn-green"><span class="glyphicon glyphicon-refresh"></span></button>
		</div>
	</div>
	<ol class="breadcrumb">
	  <li><a href="#">訂單</a></li>
	  <li class="active">預約訂單</li>
	</ol><!-- End of page header -->

	<form action="#" method="post">

		<!-- /// Add a customer     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title">新增客戶</h4>
		      </div>
		      <div class="modal-body">
		       	<ul class="add-customer-info">
		       		<li>
		       			<label>客戶姓名</label>
		       			<input type="text">
		       			<input type="hidden" value="">
		       		</li>
		       		<li><label>身分證字號</label><input type="text"></li>
		       		<li><label>電話</label><input type="text"></li>
		       	</ul>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
		        <button type="button" class="btn btn-primary">建立新客戶</button>
		      </div>
		    </div>
		  </div>
		</div><!-- End of add a customer -->
		
		<div class="orders-content-container height-equal">
			
			<!-- /// Top     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="orders-top-customer-info">
				<!-- /// Orders information     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<ul class="customer-search">
					<li class="customer-info-group input-group">
						<label>租用單單號</label>
						<div class="order-title">
							<span class="label label-info">OD1234567</span>
						</div>
					</li>
					<li class="order-status-box">
						<label>訂單狀態</label>
						<div class="status-title">
							<span class="label label-info">未結</span>
						</div>
					</li>
					<li class="bill-status-box">
						<label>結帳狀態</label>
						<div class="status-title">
							<span class="label label-info">未結</span>
						</div>
					</li>
					<li class="member-grade">
						<label>會員分級</label>
						<input id="input-customer-level" type="text" value="<?php echo $customerLevels[0]['CustomerLevel']['name']; ?>" disabled>
					</li>
					<li class="member-discount">
						<label>折扣參考</label>
						<input id="input-customer-discount" type="text" value="<?php echo $customerLevels[0]['CustomerLevel']['discount']; ?>" disabled>
					</li>
					<li class="order-source">
						<label>訂單來源</label>
						<select name="data[Order][source]">
							<option value="phone">電話</option>
							<option value="network">網路</option>
							<option value="now">現場</option>
						</select>
					</li>
					<li class="store-info">
						<label>地點</label>
						<select>
							<option value="mgr">本店</option>
						</select>
					</li>
				</ul><!-- End of Customer information-->
				
				<!-- /// Customer info     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<div class="customer-info-container">
					<div class="customer-info-left">
						<ul>
							<li>
								<label>姓名</label>
								<input type="text" value="王大明">
								<input class="add-customer" type="button" value="＋" data-toggle="modal" data-target="#myModal">
							</li>
							<li>
								<label>電話</label>
								<input type="text" value="0922222222">
							</li>
							<li>
								<label>取件人</label>
								<input type="text" value="">
							</li>
							<li>
								<label>取件人電話</label>
								<input type="text" value="">
							</li>
							<li>
								<label>身分證字號</label>
								<input type="text" value="">
							</li>
							<li>
								<label>訂單經手人</label>
								<input type="text" value="" disabled="">
							</li>
						</ul>
					</div>

					<!-- /// Count     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
					<div class="order-count">
						<ul>
							<li>
								<!-- <label>租金原價</label><input id="rent_original" name="data[Order][rent_original]" type="text"> -->
								<label>租金原價</label><input id="rent_original" type="text">
							</li>
							<li>
								<!-- <label>折數</label><input name="data[Order][discount]" type="text"> -->
								<label>折數</label><input type="text">
							</li>
							<li class="swith-button">
								<!-- Switch button -->
								<div class="btn-group" data-toggle="buttons">
								  <label class="btn btn-primary active">
								    <input type="radio" id="button-price" autocomplete="off" checked> 未稅
								  </label>
								  <label class="btn btn-primary">
								    <input type="radio" id="button-price-tax" autocomplete="off"> 含稅
								  </label>
								</div>
							</li>
							<li class="price-box">
								<!-- <div class="form-group"><label>租金總價(未)</label><input name="data[Order][price]" type="text"></div>
								<div class="form-group"><label>未稅調整</label><input name="data[Order][price_adj]" type="text"></div> -->
								<div class="form-group"><label>租金總價(未)</label><input type="text"></div>
								<div class="form-group"><label>未稅調整</label><input type="text"></div>
							</li>
							<li class="tax-box">
								<!-- <div class="form-group"><label>租金總價(含)</label><input name="data[Order][price_tax]" type="text"></div>
								<div class="form-group"><label>含稅調整</label><input name="data[Order][price_tax_adj]" type="text"></div> -->
								<div class="form-group"><label>租金總價(含)</label><input type="text"></div>
								<div class="form-group"><label>含稅調整</label><input type="text"></div>
							</li>
							<li>
								<!-- <div class="form-group total-price"><label>租金總計</label><input id="price-total" name="data[Order][price_total]" type="text"></div> -->
								<div class="form-group total-price"><label>租金總計</label><input id="price-total" name="data[Order][price]" type="text"></div>
							</li>
						</ul>
					</div><!-- End of Count-->
				</div><!-- End of Customer info-->

			</div><!-- End of Top-->


			<!-- /// Bottom     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="item-detail-container">

				<!-- /// Items List     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<div class="item-detail-list">
					<h4>器材清單</h4>

				  	<!-- Items Table -->
					  <table class="item-table table">
					    <thead>
				          <tr>
				            <th>器材名稱</th>
				            <th>器材品項</th>
				            <th>器材編號</th>
				            <th>單價</th>
				            <th>天數</th>
				            <th>預計出租時間</th>
				            <th>預計歸還時間</th>
				            <th class="check-box">實際出租時間</th>
				            <th class="check-box">實際歸還時間</th>
				            <th></th>
				          </tr>
				        </thead>

				        <tbody>
				        <?php foreach ($orders[0]['Schedule'] as $key => $schedule): ?>
				        	<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text" disabled>
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="checkbox">
							</th>
							<th>
								<input type="checkbox">
							</th>
							<th>
								<?php if($orders[0]['Order']['order_status_id'] > 2): ?>
									<a href="<?php echo $this->webroot.'events/addevent/'.$schedule['id']; ?>">
									<div><i class="glyphicon glyphicon-remove"></i>建立事件單</div>
									</a>
								<?php else: ?>
									<div><i class="glyphicon glyphicon-remove"></i>刪除</div>
								<?php endif; ?>
							</th>
				    	<?php endforeach; ?>
				          <!-- <tr>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text" disabled>
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="text">
							</th>
							<th>
								<input type="checkbox">
							</th>
							<th>
								<input type="checkbox">
							</th>
							<th>
								<button><i class="glyphicon glyphicon-remove"></i>刪除</button>
							</th>
				          </tr> -->
				        </tbody>
					  </table><!-- End of Items Table-->
					</div><!-- End of Items list-->
				
				<!-- /// Waiting List     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<div class="waiting-item-list">
					<h4>備取清單</h4>
					<!-- Waiting Table -->
					  <table class="waiting-table table">
					    <thead>
				          <tr>
				            <th>器材名稱</th>
				            <th>器材品項</th>
				            <th>器材編號</th>
				            <th>單價</th>
				            <th>天數</th>
				            <th>預計出租時間</th>
				            <th>預計歸還時間</th>
				            <th></th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <th>
				            	<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text" disabled>
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
				            	<button><i class="glyphicon  glyphicon-search"></i></button>

				            	<button><i class="glyphicon glyphicon-plus"></i></button>

				            	<button><i class="glyphicon glyphicon-remove"></i></button>
				            </th>
				          </tr>
				        </tbody>
					  </table><!-- End of Waiting Table-->	
				</div><!-- End of Waiting list-->
				
				<!-- /// Accessories List     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<div class="accessories-list">
					<h4>配件清單</h4>

					<!-- Accessories Table-->
					<!-- Items Table -->
					  <table class="accessory-table table">
					    <thead>
				          <tr>
				            <th>器材名稱</th>
				            <th>器材品項</th>
				            <th>器材編號</th>
				            <th>單價</th>
				            <th>天數</th>
				            <th>預計出租時間</th>
				            <th>預計歸還時間</th>
				            <th>實際出租時間</th>
				            <th>實際歸還時間</th>
				            <th></th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <th>
				            	<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text" disabled>
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
								<input type="text">
				            </th>
				            <th>
				            	<button><i class="glyphicon glyphicon-remove"></i>刪除</button>
				            </th>
				          </tr>
				        </tbody>
					  </table><!-- End of Accessories Table-->
				</div><!-- End of Accessories List-->
				
				<!-- /// Others List     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
				<div class="others-list">
					<h4>其他收入</h4>
					<input type="button" value="新增項目">

					<div class="others-table">
						<ul>
							<li>
								<label>來源</label>
								<select>
									<option>銷貨收入</option>
									<option>損壞賠償</option>
									<option>製作收入</option>
									<option>清潔費</option>
									<option>水電費</option>
								</select>
								</li>
							<li>
								<label>詳細內容</label>
								<input type="text">
							</li>
							<li>
								<label>金額</label>
								<input type="text">
							</li>
							<li>
								<label></label>
								<button class="btn-plus"><i class="glyphicon glyphicon-plus"></i></button>

								<button class="btn-delete"><i class="glyphicon glyphicon-remove"></i>刪除</button>
							</li>
						</ul>
					</div>
				</div><!-- End of Others list-->

			</div>
			<!-- End of Bottom-->
			
			<!-- /// Note & Buttons    ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="order-note">
				<label>備註</label>
				<textarea name="data[Order][note]" rows="3"></textarea>
			</div>
			<div class="clearfix"></div>
			<div class="order-actions">
				<div class="action-left">
					<input type="button" value="取消預約" class="btn-cancel">
					<input type="button" value="查詢">
				</div>
				<div class="action-right">
					<input type="button" value="列印">
					<input type="button" value="儲存">
				</div>
			</div><!-- Enf of Note $ Buttons-->
		</div>

		<!-- /// Tips     ///////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div class="tips-pop-up height-equal">
			<h3>Tips</h3>
			<p class="text-red">GoPro 已被借出 (備一)</p>
			
			<div class="record-list">
				<ul>
					<li>
						<a href="">前一筆租借記錄</a>
						<p>2014/08/30 12:00 ~ 2014/09/01 18:00</p>
					</li>
					<li>
						<a href="">中間衝突租借紀錄</a>
						<p>2014/08/30 12:00 ~ 2014/09/01 18:00</p>
					</li>
					<li>
						<a href="">後一筆租借記錄</a>
						<p>2014/08/31 12:00 ~ 2014/09/01 18:00</p>
					</li>
				</ul>

				<div class="rent-checkbox">
					<label>加入備取清單</label>
					<input type="checkbox">
				</div>
			</div>
		</div><!-- End of Tips -->

	</form>
</div>


