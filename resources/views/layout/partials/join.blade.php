 <!-- Join Section -->
    <section id="join">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">加入社團</h2>
                    <h3 class="section-subheading text-muted">Join us!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ url('join') }}" method="POST" id="contactForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="姓名 *" name="name" required="" data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="班級 *" name="class" required="" data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="學號 *" name="student_id" required="" data-validation-required-message="">
                                    <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                        <input type="text" class="form-control" placeholder="FB網址 *" name="facebook_url" required="" data-validation-required-message="">
                                        <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                <h2>性別 *</h2> 
                                     <div class="radio-container">
                                      <ul>
                                      <li>
                                        <input type="radio" id="f-option" name="gender" checked="checked" value="男生">
                                        <label for="f-option">男生</label>
                                        <div class="check"></div>
                                      </li>
                                      <li>
                                        <input type="radio" id="s-option" name="gender" value="女生">
                                        <label for="s-option">女生</label>
                                        <div class="check"><div class="inside"></div></div>
                                      </li>
                                    </ul>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                
                                <div class="form-group">
                                        <textarea type="text" class="form-control" placeholder="社團經歷 *" name="clubs_experience" required="" data-validation-required-message=""></textarea>
                                        <p class="help-block text-danger"></p>
                                </div>

                                <div class="form-group">
                                        <textarea type="text" class="form-control" placeholder="活動經歷 *" name="activities_experience" required="" data-validation-required-message=""></textarea>
                                        <p class="help-block text-danger"></p>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" > 
                                <h2>遊戲經歷 *</h2>                     
                                    <div class="large-checkbox">
                                     <label> <input type="checkbox" name="games[]" value="英雄聯盟">英雄聯盟</label>
                                    </div>

                                    <div class="large-checkbox">
                                      <label><input type="checkbox" name="games[]" value="A.V.A戰地之王">A.V.A戰地之王</label>
                                    </div>

                                    <div class="large-checkbox">
                                     <label> <input type="checkbox" name="games[]" value="爐石戰記">爐石戰記</label>
                                    </div>

                                    <div class="large-checkbox">
                                      <label><input type="checkbox" name="games[]"  value="OVERWATCH">OVERWATCH</label>
                                    </div>

                                    <div class="large-checkbox">
                                      <label><input type="checkbox" name="games[]"  value="CS:GO">CS:GO</label>
                                    </div>

                                    <div class="large-checkbox">
                                     <label> <input type="checkbox" name="games[]" value="星海爭霸">星海爭霸</label>
                                    </div>

                                    <div class="large-checkbox">
                                      <label><input type="checkbox" name="games[]" value="" onclick="var input = document.getElementById('other_game'); if(this.checked){ input.hidden = false;input.disabled = false; input.focus() ;}else{input.hidden=true;input.disabled = true;}">其他</label>
                                    </div>
                                    <div id="other_game" hidden disabled>
                                        <input type="text" class="form-control" placeholder="其他"  name="other_games">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                
                                <div class="form-group">
                                        <textarea type="text" class="form-control" placeholder="入社動機（為什麼想加入電競社？）*" name="join_motivation" required="" data-validation-required-message=""></textarea>
                                        <p class="help-block text-danger"></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
