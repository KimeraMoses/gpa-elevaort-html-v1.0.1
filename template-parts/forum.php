   <!--Questins section-->
    
    <!---QUESTION SECTION  SIDE-BAR LEFT STARTS HERE-->
    <div class="container-fluid" id="questionSection">
      <h1>QUESTION SECTION</h1>
    </div>
    <div class="row question_section">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 questionSection__ask" >
      <div  id="questionSection__ask">
        <div class="questionSection-welcome_massage">
        <h4><b>YOU NEED HELP?</b></h4>
        <hr class="questionSection-welcome_massage-rule">
        <h6>Don't endlessly surf the internet for an answer,You can ask any questions in this particular course unit here and let your fellow students answer it for you shortly.</h6>
      </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h2 class= "h4 text-white bg-info mb-2 p-2 rounded ">Ask a question</h2>
        </div>
      </div>
      <form  class="mb-3" action="#" method="get">
        <div class="form-group ">
          <label for="topic">Topic:</label>
          <input type="text" class="form-control" name="qn_topic" id="topic" placeholder="Give your topic a title." required>
        </div>
        <div class="form-group ">
          <label for="question">Ask your question:</label>
          <textarea class="form-control" placeholder="Type your question here." id="questions" rows="5" required>
          </textarea>
      
        </div>
        <div class="input-group ">
            <div class="input-group-prepend">
              <span class="input-group-text" id="file_upload">Upload file</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
              <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
        </div>
    
        <div class="form-check">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" id="checkbox"  value="notification">
            Notify me upon replies.
          </label>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 questionSection__ask-btns">
          <div class="submit">
              <button type="submit"  id="button-send">Submit</button>
              <div class="ease"></div>
          </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 questionSection__ask-btns" >
              <div class="submit">
                <button type="reset" value="Reset" id="button-reset">Reset</button>
                <div class="ease-reset"></div>
              </div>
          </div>
        </div>
      </form>
      
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" id="trending_Q&A">
        <div class="question_display_area">
            <h2 class= "row h4 text-white bg-info mb-2 p-2 rounded-top Trending_questions_title">Trending questions</h2>
      {% block qn_1 %}
     
      <div class="row studentsquestion studentsquestion-01"> 
        <div class="students_profile_pictures">{% block qn_1_std_1_profile_pic %} <a href="www.gpaelevator.com/nansambaracheal/"> <img id="students_profile_picture" src="../../img/racheal.jpg" alt=""></a> <a class="student_name" href="http://">NANSAMBA RACHEAL </a>  {% endblock qn_1_std_1_profile_pic %}
          <div class="date_time_posted"><i>{% block qn_1_std_1_date_posted %} Posted On 12/09/2019  12:00PM {% endblock qn_1_std_1_date_posted %}</i> </div>
        </div> 
        <div class="question_box">
            <h5> <i><span class="studentsquestion_topic">Topic: </span>{% block qn_1_topic %} Computer hardware{% endblock qn_1_topic %}</h5></i> 
           <p class="mb-0">{% block qn_1_paragraph %} please help me with reference on what i should focus on because hardware is too much and exams are next week</p>
        </div>
       
      {% block qn_1_rxns %}
        <div class="container-fluid">
          <div class="row users_reactions">
          {% block qn_1_rxn_like %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
              <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.1" autocomplete="off" >
              <label for="reactions_trigger-01.1" class="toggle_content_label reactions_trigger-label"> 
              <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                <i class="far fa-thumbs-up "></i> Like({% block like_num %}413 )</span>
              </label>
            </span> 
           
          {% block qn_1_rxn_ans %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 answers users_views" id=""> 
              <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.2" autocomplete="off" >
              <label for="reactions_trigger-01.2" class="toggle_more_years_button toggle_content_label reactions_trigger-label"> 
              <span class="users_views_active users_views_reactions" id="toggle_answers_trigger">
                  <i class="fas fa-pen-alt "></i> Answer({% block qn_1_ans_num %}20 )</span>
              </label>
              
            </span> 
            
          {% block qn_1_rxn_interest %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views"> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.3" autocomplete="off" >
                <label for="reactions_trigger-01.3" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                   Interested({% block interest_num %}10 ) </span>
                </label>
            </span>  
          
          {% block qn_1_rxn_share %}
            <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle"> <i class="fas fa-share "></i>  Share
            </span> 
            
       </div>
  
  
       <div class="toggle_answers"  id="students_answer_wrapper">
         <div class="answer_section">
           {% block qn_1_ans_1 %}
            <div class="row studentsanswers  students_reply-01">
                <div class="students_profile_pictures">{% block qn_1_std_2_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/ssemugenyi-isaac.jpg" alt=""></a> <a class="student_name" href="http://">Ssemugenyi Isaac</a>  
                  <div class="date_time_posted"><i>{% block qn_1_std_2_date_posted %} 1week ago</i> </div> 
                </div> 
                <div class="question_box">
                  <p class="mb-0">{% block qn_1_ans_1_paragraph %}Just read the network hardware devices more and little of the general hardware.</p>
                 </div>
  
                
                 <div class="container-fluid">
                  <div class="row Answer_users_reactions">
                    {% block qn_1_ans_1_agree %}
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                        <input type="radio" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.4"  >
                        <label for="reactions_trigger-01.4" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree( {% block qn_1_ans_1_agree_num %} 5 ) </span>
                        </label>
                      </span> 
                    
                    {% block qn_1_ans_1_disagree %}
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="radio" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.5" >
                          <label for="reactions_trigger-01.5" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                              <i class="far fa-thumbs-down "></i>Disagree( {% block qn_1_ans_1_disagree_num %}1 )</span>
                          </label>
                        </span>
                    
                    {% block qn_1_ans_1_rxn %}
                    <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                      <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-01.6" autocomplete="off" >
                      <label for="reactions_trigger-01.6" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box">Reactions( {% block qn_1_ans_1_rxn_num %}13 )</span>
                      </label>
                    </span>
                  
                  {% block qn_1_ans_1_share %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
            
                  </span>
                  
                   
               </div>
          <section class="Reaction_Section">
            
            <div id="reaction_box" class="reactions_wrapper content_box_hidden_before_toggle" > 
              <div class="container-fluid reactions_title-box">Reactions</div>
               
                 {% block qn_1_ans_1_rxn_1 %}
                <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                  <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_3_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus</a> 
                    <div class="date_time_posted"><i>{% block qn_1_std_3_date_posted %}12hours ago </i> </div> 
                  </div>
                  <div class="question_box">
                    <p class="mb-0">{% block qn_1_ans_1_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester</p>
                  </div>
                    <div class="row  student_views_on_reactions_about_trending_qns">
                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.7" autocomplete="off" >
                        <label for="reactions_trigger-01.7" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                          <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_1_rxn_1_agree_num %}5 )  </span>
                        </label> 
                      </span>   
                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.8" autocomplete="off" >
                        <label for="reactions_trigger-01.8" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                          <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_1_rxn_1_disagree_num %}1 ) </span>
                        </label> 
                      </span>
                      <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
            
                      </span>   
                    </div>
                   
                </div>
                

              {% block qn_1_ans_1_rxn_2 %}
                 <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
         
                   <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_4_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> 
                    <div class="date_time_posted"><i>{% block qn_1_std_4_date_posted %}2minutes ago </i> </div> 
                   </div>
                   <div class="question_box">
                     <p class="mb-0">{% block qn_1_ans_1_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>
                   </div>
                     <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.9" autocomplete="off" >
                          <label for="reactions_trigger-01.9" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_1_rxn_2_agree_num %}1000 )  </span>
                          </label> 
                        </span>   
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.11" autocomplete="off" >
                          <label for="reactions_trigger-01.11" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_1_rxn_2_disagree_num %}0 ) </span>
                          </label> 
                        </span>
                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                  </div>
                    
                 </div>
              

                 <div class=" students_answer_input-box">      
                    <form action="#trending_Q&A" method="POST" class="Answer_form"  enctype="multipart/form-data"> 
                       <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                       <div class="input-group ">
                           <div class="input-group-prepend">
                             <span class="input-group-text" id="file_upload">Upload file</span>
                           </div>
                           <div class="custom-file">
                             <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                             <label class="custom-file-label" for="inputGroupFile01"></label>
                           </div>
                       </div>
                       <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                        <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                        <path d="M0 0h24v24H0z" fill="none"/> </svg>
                       </button>
                     </form>
                 </div>
               </div>
          </section>
  
                 </div>
              </div>
            
         </div>
  
          
            <div class="answer_section">
              {% block qn_1_ans_2 %}
               <div class="row studentsanswers  students_reply-01">
                   <div class="students_profile_pictures">{% block qn_1_std_5_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/cmp.jpg" alt=""></a> <a class="student_name" href="http://">REX</a>   
                     <div class="date_time_posted"><i>{% block qn_1_std_5_date_posted %} 1week ago</i> </div> 
                   </div> 
                   <div class="question_box">
                     <p class="mb-0">{% block qn_1_ans_2_paragraph %}Just read the network hardware devices more and little of the general hardware.</p>
                    </div>
     
                   
                    <div class="container-fluid">
                     <div class="row Answer_users_reactions">
                       {% block qn_1_ans_2_agree %}
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.12"  >
                          <label for="reactions_trigger-01.12" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-up "></i>Agree( {% block qn_1_ans_2_agree_num %} 5 ) </span>
                           </label>
                         </span> 
                       
                       {% block qn_1_ans_2_disagree %}
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.13" >
                          <label for="reactions_trigger-01.13" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                                 <i class="far fa-thumbs-down "></i>Disagree( {% block qn_1_ans_2_disagree_num %}1 )</span>
                             </label>
                           </span>
                       
                       {% block qn_1_ans_2_rxn %}
                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                        <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-01.14" autocomplete="off" >
                        <label for="reactions_trigger-01.14" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box-01">Reactions( {% block qn_1_ans_2_rxn_num %}130 )</span>
                        </label>
                      </span>
                     
                     {% block qn_1_ans_2_share %}
                     <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
               
                     </span>
                     
                      
                  </div>
             <section class="Reaction_Section">
               
              <span id="reaction_box" class="reactions_wrapper content_box_hidden_before_toggle-01" > 
                <div class="container-fluid reactions_title-box">Reactions</div>

                    {% block qn_1_ans_2_rxn_1 %}
                   <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                     <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_6_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus</a> 
                       <div class="date_time_posted"><i>{% block qn_1_std_6_date_posted %}12hours ago </i> </div> 
                     </div>
                     <div class="question_box">
                       <p class="mb-0">{% block qn_1_ans_2_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester</p>
                     </div>
                       <div class="row  student_views_on_reactions_about_trending_qns">
                         <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.15" autocomplete="off" >
                          <label for="reactions_trigger-01.15" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                             <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_2_rxn_1_agree_num %}5 )  </span>
                           </label> 
                         </span>   
                         <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.16" autocomplete="off" >
                          <label for="reactions_trigger-01.16" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                             <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_2_rxn_1_disagree_num %}1 ) </span>
                           </label> 
                         </span>
                         <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
               
                         </span>   
                       </div>
                      
                   </div>
                   
            
                 {% block qn_1_ans_2_rxn_2 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
            
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_1_std_7_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> 
                       <div class="date_time_posted"><i>{% block qn_1_std_7_date_posted %}2minutes ago </i> </div> 
                      </div>
                      <div class="question_box">
                        <p class="mb-0">{% block qn_1_ans_2_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>
                      </div>
                        <div class="row  student_views_on_reactions_about_trending_qns">
                           <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                            <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.17" autocomplete="off" >
                            <label for="reactions_trigger-01.17" class="toggle_content_label reactions_trigger-label"> 
                            <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-up "></i>Agree({% block qn_1_ans_2_rxn_2_agree_num %}1000 )  </span>
                             </label> 
                           </span>   
                           <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                            <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-01.18" autocomplete="off" >
                            <label for="reactions_trigger-01.18" class="toggle_content_label reactions_trigger-label"> 
                            <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                               <i class="far fa-thumbs-down "></i>  Disagree({% block qn_1_ans_2_rxn_2_disagree_num %}0 ) </span>
                             </label> 
                           </span>
                          <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                     </div>
                       
                    </div>
                 
           

                    <div class=" students_answer_input-box">      
                       <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                          <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                          <div class="input-group ">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="file_upload">Upload file</span>
                              </div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                                <label class="custom-file-label" for="inputGroupFile01"></label>
                              </div>
                          </div>
                          <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><svg xmlns="http://www.w3.org/2000/svg" fill="#ffffff" height="24" viewBox="0 0 24 24" width="24">
                           <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
                           <path d="M0 0h24v24H0z" fill="none"/> </svg>
                          </button>
                        </form>

                  </span>
             </section>
     
                    </div>
                 </div>
               
            </div>

     
          </div>
         </div> 
      


      </div>

      {% endblock qn_1 %}
      
      {% block qn_2 %}
          <div class="row studentsquestion studentsquestion-excluding-1 studentsquestion-02">

            <div class="students_profile_pictures">{% block qn_2_std_1_profile_pic %} <a href="www.gpaelevator.com/nansambaracheal/"> <img id="students_profile_picture" src="../img/lawrenzo.jpg" alt=""></a> <a class="student_name" href="http://">MUGAMBWA LAWRENCE</a>   {% endblock qn_2_std_1_profile_pic %}
              <div class="date_time_posted"><i>{% block qn_2_std_1_date_posted %} Posted On 12/09/2019  12:00PM {% endblock qn_2_std_1_date_posted %}</i> </div>
            </div> 
            
            <div class="question_box">
              <h5> <i><span class="studentsquestion_topic">Topic: </span>{% block qn_2_topic %} Computer Architecture {% endblock qn_2_topic %}</h5></i> 
             <p class="mb-0">{% block qn_2_paragraph %} what is marie, i dont even have a single idea about it enlight me please </p>
          </div>
  
          <div class="container-fluid">
            <div class="row users_reactions">
            {% block qn_2_rxn_like %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.1" autocomplete="off" >
                <label for="reactions_trigger-02.1" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                  <i class="far fa-thumbs-up "></i> Like({% block qn_2_like_num %}413 )</span>
                </label>
              </span> 
             
            {% block qn_2_rxn_ans %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 answers users_views" id=""> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.2" autocomplete="off" >
                <label for="reactions_trigger-02.2" class="toggle_more_years_button toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="answer___section_tigger">
                    <i class="fas fa-pen-alt "></i> Answer({% block qn_2_ans_num %}20 )</span>
                </label>
              </span> 
              
            {% block qn_2_rxn_interest %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views"> 
                <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-03.3" autocomplete="off" >
                <label for="reactions_trigger-03.3" class="toggle_content_label reactions_trigger-label"> 
                <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                     Interested({% block qn_2_interest_num %}10 ) </span>
                </label>
              </span>  
            
            {% block qn_2_rxn_share %}
              <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle"> <i class="fas fa-share "></i>  Share
              </span> 
              
         </div>


         <div class="answer___section"  id="students_answer_wrapper">
          <div class="answer_section">

            {% block qn_2_ans_1 %}
            <div class="row studentsanswers  students_reply-01">
              <div class="students_profile_pictures">{% block qn_2_std_2_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../img/patrick_cedat.jpg" alt=""><a class="student_name" href="http://">Birungi Patrick</a>  
                <div class="date_time_posted"><i>{% block qn_2_std_2_date_posted %} 3days ago</i> </div> 
              </div> 
              <div class="question_box">
                <p class="mb-0">{% block qn_2_ans_1_paragraph %} There is my answer agree or disagree? </p>
                <div class="students_question_img">{% block qn_2_ans_1_pic %}<img class="students_question_img" src="../img/soln.jpg" alt=""> </div>
              </div>
              <div class="container-fluid">
                <div class="row Answer_users_reactions">
                  {% block qn_2_ans_1_agree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                    <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.4"  >
                    <label for="reactions_trigger-02.4" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                        <i class="far fa-thumbs-up "></i>Agree( {% block qn_2_ans_1_agree_num %} 5 ) </span>
                    </label>
                  </span> 
                
                {% block qn_2_ans_1_disagree %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                  <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.5" >
                  <label for="reactions_trigger-02.5" class="toggle_content_label reactions_trigger-label"> 
                  <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                        <i class="far fa-thumbs-down "></i>Disagree( {% block qn_2_ans_1_disagree_num %}1 )</span>
                    </label>
                </span>
              
              {% block qn_2_ans_1_rxn %}
                    <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                      <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-02.6" autocomplete="off" >
                      <label for="reactions_trigger-02.6" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_on_answer_01_on_qn2-trigger">
                        Reactions( {% block qn_2_ans_1_rxn_num %}134 )</span>
                  </span>
              
              {% block qn_2_ans_1_share %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                  </span>
                   
                </div>
                <section class="Reaction_Section">
                  <span id="" class="reactions_wrapper reaction_on_answer_01_on_qn2" > 
                    <div class="container-fluid reactions_title-box">Reactions</div>

                    {% block qn_2_ans_1_rxn_1 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_3_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Moxhus Ug</a> 
                        <div class="date_time_posted"><i>{% block qn_2_std_3_date_posted %}12hours ago </i> </div> 
                      </div>

                      <div class="question_box">
                        <p class="mb-0">{% block qn_2_ans_1_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester</p>
                      </div>

                      <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.7" autocomplete="off" >
                          <label for="reactions_trigger-02.7" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_1_rxn_1_agree_num %}5 )  </span>
                          </label> 
                        </span> 

                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.8" autocomplete="off" >
                          <label for="reactions_trigger-02.8" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_1_rxn_1_disagree_num %}1 ) </span>
                          </label> 
                        </span>

                        <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                        </span>  

                      </div>

                    </div>
                    

                    {% block qn_2_ans_1_rxn_2 %}
                    <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                      <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_4_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> 
                        <div class="date_time_posted"><i>{% block qn_2_std_4_date_posted %}2minutes ago </i> </div> 
                       </div>

                       <div class="question_box">
                        <p class="mb-0">{% block qn_2_ans_1_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>
                      </div>
                      <div class="row  student_views_on_reactions_about_trending_qns">
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.9" autocomplete="off" >
                          <label for="reactions_trigger-02.9" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_1_rxn_2_agree_num %}1000 )  </span>
                          </label> 
                        </span> 
                        <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                          <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.11" autocomplete="off" >
                          <label for="reactions_trigger-02.11" class="toggle_content_label reactions_trigger-label"> 
                          <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                            <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_1_rxn_2_disagree_num %}0 ) </span>
                          </label> 
                        </span>
                        <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                      </div>
                    </div>
                    

                    <div class=" students_answer_input-box">      
                      <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                         <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                         <div class="input-group ">
                             <div class="input-group-prepend">
                               <span class="input-group-text" id="file_upload">Upload file</span>
                             </div>
                             <div class="custom-file">
                               <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                               <label class="custom-file-label" for="inputGroupFile01"></label>
                             </div>
                         </div>
                         <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                       </form>
                   </div>

                    </span>
                </section>


              </div>

            </div>
            {% endblock qn_2_ans_1 %}
          </div>
          <div class="answer_section">
            {% block qn_2_ans_2 %}
            <div class="row studentsanswers studentsquestion-excluding-1 studentsquestion-02">
              <div class="students_profile_pictures">{% block qn_2_std_5_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/cmp.jpg" alt=""></a> <a class="student_name" href="http://">REX</a>   
                <div class="date_time_posted"><i>{% block qn_2_std_5_date_posted %} 1week ago</i> </div> 
              </div>

              <div class="question_box">
                <p class="mb-0">{% block qn_2_ans_2_paragraph %}Just read the network hardware devices more and little of the general hardware.</p>
               </div>

               <div class="container-fluid">
                <div class="row Answer_users_reactions">
                  {% block qn_2_ans_2_agree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                    <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.12"  >
                    <label for="reactions_trigger-02.12" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                         <i class="far fa-thumbs-up "></i>Agree( {% block qn_2_ans_2_agree_num %} 5 ) </span>
                     </label>
                   </span> 
                  

                  {% block qn_2_ans_2_disagree %}
                  <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views">
                   <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.13" >
                   <label for="reactions_trigger-02.13" class="toggle_content_label reactions_trigger-label"> 
                   <span class="users_views_active users_views_reactions " id="reaction_box_disagree">
                          <i class="far fa-thumbs-down "></i>Disagree( {% block qn_2_ans_2_disagree_num %}1 )</span>
                      </label>
                    </span>
                

                {% block qn_2_ans_2_rxn %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views users_views_on_answered reactions"> 
                  <input type="checkbox" class="toggle_content_checkbox reactions_trigger-button" id="reactions_trigger-02.14" autocomplete="off" >
                  <label for="reactions_trigger-02.14" class="toggle_content_label reactions_trigger-label"> 
                    <span class="users_views_active users_views_reactions" id="reaction_on_answer_02_on_qn2-trigger">Reactions( {% block qn_2_ans_2_rxn_num %}130 )</span>
                  </label>
                </span> 
              

              {% block qn_2_ans_2_share %}
                <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share
                </span>
              

                </div>

                <section class="Reaction_Section">
                  <span id="" class="reactions_wrapper reaction_on_answer_02_on_qn2" >
                  <div class="container-fluid reactions_title-box">Reactions</div>

                  {% block qn_2_ans_2_rxn_1 %}
                  <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                    <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_6_profile_pic %}<a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/mox.jpg" alt=""></a> <a class="student_name" href="http://">Kimera Mox</a> 
                      <div class="date_time_posted"><i>{% block qn_2_std_6_date_posted %}12hours ago </i> </div> 
                    </div>

                    <div class="question_box">
                      <p class="mb-0">{% block qn_2_ans_2_rxn_1_paragraph %} Mwana this is poison she needs to read all at least to have an idea of each of the hardware we had this Semester</p>
                    </div>

                    <div class="row  student_views_on_reactions_about_trending_qns">

                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.15" autocomplete="off" >
                        <label for="reactions_trigger-02.15" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_2_rxn_1_agree_num %}5 )  </span>
                         </label> 
                       </span> 

                       <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.16" autocomplete="off" >
                        <label for="reactions_trigger-02.16" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_2_rxn_1_disagree_num %}1 ) </span>
                         </label> 
                       </span>

                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share </span>   
                    </div>

                  </div>

                  

                  {% block qn_2_ans_2_rxn_2 %}
                  <div class="container-fluid studentsanswers studentsquestion-excluding-1  student_reactions_on_trending_qns">
                    <div class="students_profile_pictures students_profile_pictures-reactions">{% block qn_2_std_7_profile_pic %} <a href="www.gpaelevator.com/ssemugenyisaac/"> <img id="students_profile_picture" src="../../img/isaac.jpg" alt=""></a> <a class="student_name" href="http://">Mubiru Isaac</a> 
                      <div class="date_time_posted"><i>{% block qn_2_std_7_date_posted %}2minutes ago </i> </div> 
                     </div>

                     <div class="question_box">
                       <p class="mb-0">{% block qn_2_ans_2_rxn_2_paragraph %}Me i would advise you to do whatever you can to read everything before you enter the paper to avoid disappointments</p>
                     </div>
                     <div class="row  student_views_on_reactions_about_trending_qns">

                      <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.17" autocomplete="off" >
                        <label for="reactions_trigger-02.17" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-up "></i>Agree({% block qn_2_ans_2_rxn_2_agree_num %}1000 )  </span>
                         </label> 
                       </span> 

                       <span class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 users_views_on_reactions "> 
                        <input type="checkbox" class="toggle_content_checkbox-01 reactions_trigger-button" id="reactions_trigger-02.18" autocomplete="off" >
                        <label for="reactions_trigger-02.18" class="toggle_content_label reactions_trigger-label"> 
                        <span class="users_views_active users_views_reactions" id="reaction_box_disagree">
                           <i class="far fa-thumbs-down "></i>  Disagree({% block qn_2_ans_2_rxn_2_disagree_num %}0 ) </span>
                         </label> 
                       </span>

                       <span class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3 users_views" id="share_toggle">  <i class="fas fa-share "></i>  Share     </span> 
                     </div>
                  </div>
                  {% endblock qn_2_ans_2_rxn_2 %}
                  <div class=" students_answer_input-box">      
                    <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                       <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Reaction here.."  rows="3" id="" ></textarea>
                       <div class="input-group ">
                           <div class="input-group-prepend">
                             <span class="input-group-text" id="file_upload">Upload file</span>
                           </div>
                           <div class="custom-file">
                             <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                             <label class="custom-file-label" for="inputGroupFile01"></label>
                           </div>
                       </div>
                       <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                     </form>
                  </div>

                  </span>
                </section>

               </div>
            </div>
            {% endblock qn_2_ans_2 %}
            <hr>
            <div class=" students_answer_input-box">      
                <form action="#trending_Q&A" method="POST" class="Answer_form" enctype="multipart/form-data">
                   <textarea class="form-control students_answer_input-box_textarea" placeholder="Write your Answer here.."  rows="3" id="" ></textarea>
                   <div class="input-group ">
                       <div class="input-group-prepend">
                         <span class="input-group-text" id="file_upload">Upload file</span>
                       </div>
                       <div class="custom-file">
                         <input type="file" class="custom-file-input" id="custom-user-file-reactions" onchange="readURL(this);" accept="/image">
                         <label class="custom-file-label" for="inputGroupFile01"></label>
                       </div>
                   </div>
                   <button  type="submit" id="Answer_btn_submit-answers" class="btn Answer_btn_submit" title="Send"><img id="send-svg" src="../img/send.svg"/></button>
                 </form>
            </div>

          </div>

         </div>

          </div>
        </div>
      {% endblock qn_2 %}

        </div>



        <div class="container-fluid pagination">
              <a href="#" ><i class="fas fa-chevron-left more-members-icons"></i> </a>
              <a href="#" class="more-members active">1</a>
              <a href="#" class="more-members">2</a>
              <a href="#" class="more-members">3</a>
              <a href="#" class="more-members">4</a>
              <a href="#" ><i class="fas fa-chevron-right more-members-icons"></i> </a>
    
    
        </div>

      </div>
    </div>
    
    
    

    

     
    