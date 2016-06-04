<?php

/* student/index.html.twig */
class __TwigTemplate_d0acdc25298515ff7e61eb36bc70a64100577200fcf76665bc0a0819e87642f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4432bbb274e0f47f3696027a2ef94d5e1adafbdb130e263f962b1cd3c142d4ef = $this->env->getExtension("native_profiler");
        $__internal_4432bbb274e0f47f3696027a2ef94d5e1adafbdb130e263f962b1cd3c142d4ef->enter($__internal_4432bbb274e0f47f3696027a2ef94d5e1adafbdb130e263f962b1cd3c142d4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4432bbb274e0f47f3696027a2ef94d5e1adafbdb130e263f962b1cd3c142d4ef->leave($__internal_4432bbb274e0f47f3696027a2ef94d5e1adafbdb130e263f962b1cd3c142d4ef_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ab50736fd602c688bbe7befeaa583bcd70a9839e95e08c1cde39aa55be6ea5 = $this->env->getExtension("native_profiler");
        $__internal_b7ab50736fd602c688bbe7befeaa583bcd70a9839e95e08c1cde39aa55be6ea5->enter($__internal_b7ab50736fd602c688bbe7befeaa583bcd70a9839e95e08c1cde39aa55be6ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"uk-modal\" id=\"new_task\">
     <div class=\"uk-modal-dialog\">
         <div class=\"uk-modal-header\">
             <h4 class=\"uk-modal-title\">Send sms  here</h4>
         </div>
         <form action=\"{!! url('/fireOwingSMS')!!}\" method=\"POST\">
             <input type=\"hidden\" name=\"_token\" value=\"{!! csrf_token() !!}\"> 


             <textarea cols=\"30\" rows=\"4\" name=\"message\"class=\"md-input\" required=\"\"></textarea>


             <div class=\"uk-modal-footer uk-text-right\">
                 <button type=\"submit\" class=\"md-btn md-btn-flat md-btn-flat-primary md-btn-wave\" id=\"snippet_new_save\"><i   class=\"material-icons\"   >smartphone</i>Send</button>    
                 <button type=\"button\" class=\"md-btn md-btn-flat uk-modal-close md-btn-wave\">Close</button>
             </div>
         </form>
     </div>
 </div>
    <div style=\"\">
     <div class=\"uk-margin-bottom\" style=\"margin-left:1021px\" >
         <a  href=\"#new_task\" data-uk-modal=\"{ center:true }\"> <i title=\"click to send sms to students owing\"   class=\"material-icons md-36 uk-text-success\"   >phonelink_ring message</i></a>

         <a href=\"#\" class=\"md-btn md-btn-small md-btn-success uk-margin-right\" id=\"printTable\">Print Table</a>
         <div class=\"uk-button-dropdown\" data-uk-dropdown=\"{mode:'click'}\">
             <button class=\"md-btn md-btn-small md-btn-success\"> columns <i class=\"uk-icon-caret-down\"></i></button>
             <div class=\"uk-dropdown\">
                 <ul class=\"uk-nav uk-nav-dropdown\" id=\"columnSelector\"></ul>
             </div>
         </div>
     </div>
 </div>
    <div class=\"uk-width-xLarge-1-1\">
        <div class=\"md-card\">
            <div class=\"md-card-content\">

                <h5>Student list</h5>

                <div class=\"uk-overflow-container\" id='print'>
         <center><span class=\"uk-text-success uk-text-bold\">99 Records</span></center>
                <table class=\"uk-table uk-table-hover uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair\" id=\"ts_pager_filter\"> 
     
                <thead>
                        <tr>
                            <th>Id</th>
                            <th>Firstname</th>
                            <th>Surname</th>
                            <th>Fullname</th>
                            <th>Dob</th>
                            <th>Title</th>
                            <th>Gender</th>
                            <th>Indexno</th>
                            <th>Age</th>
                            <th>Othernames</th>
                            <th>Studenttype</th>
                            <th>Status</th>
                            <th>Classadmitted</th>
                            <th>Currentclass</th>
                            <th>Waecindexno</th>
                            <th>Hometown</th>
                            <th>Address</th>
                            <th>Region</th>
                            <th>Phone</th>
                            <th>Formerschool</th>
                            <th>Programme</th>
                            <th>House</th>
                            <th>Nationality</th>

                            <th>Parentname</th>
                            <th>Parentaddress</th>
                            <th>Parentphone</th>
                            <th>Parentemail</th>
                            <th>Studentliveswith</th>
                            <th>Schoolarship</th>
                            <th>Subjectcombination</th>
                            <th>Yeargroup</th>
                            <th>Issues</th>
                            <th>Termbill</th>
                            <th>Ptaowing</th>
                            <th>Academicbillowing</th>
                            <th>Disabilty</th>
                            <th>Residencestatus</th>
                            <th>Religion</th>
                            <th>Bloodgroup</th>
                            <th>Sickling</th>
                            <th>Nhisno</th>
                            <th>Dateadded</th>
                            <th>Parentoccupation</th>
                            <th>Email</th>
                            <th>Boardingowing</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 99
            echo "                            <tr>
                                <td><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "surname", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "fullName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "dob", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "title", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "gender", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "indexNo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "age", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "othernames", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentType", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "status", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "classAdmitted", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "currentClass", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "waecIndexNo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "hometown", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "address", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "region", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "phone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "formerSchool", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "programme", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "house", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nationality", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "dateAdmitted", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "parentName", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "parentAddress", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "parentPhone", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "parentEmail", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "studentLivesWith", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "schoolarship", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "subjectCombination", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "yearGroup", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "issues", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "termBill", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "ptaOwing", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "academicBillOwing", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "disabilty", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "residenceStatus", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "religion", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "bloodGroup", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "sickling", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nhisNo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "parentOccupation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "boardingOwing", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_show", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                    </tbody>
                </table>

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_b7ab50736fd602c688bbe7befeaa583bcd70a9839e95e08c1cde39aa55be6ea5->leave($__internal_b7ab50736fd602c688bbe7befeaa583bcd70a9839e95e08c1cde39aa55be6ea5_prof);

    }

    public function getTemplateName()
    {
        return "student/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 157,  334 => 151,  328 => 148,  321 => 144,  317 => 143,  313 => 142,  309 => 141,  305 => 140,  301 => 139,  297 => 138,  293 => 137,  289 => 136,  285 => 135,  281 => 134,  277 => 133,  273 => 132,  269 => 131,  265 => 130,  261 => 129,  257 => 128,  253 => 127,  249 => 126,  245 => 125,  241 => 124,  237 => 123,  233 => 122,  229 => 121,  225 => 120,  221 => 119,  217 => 118,  213 => 117,  209 => 116,  205 => 115,  201 => 114,  197 => 113,  193 => 112,  189 => 111,  185 => 110,  181 => 109,  177 => 108,  173 => 107,  169 => 106,  165 => 105,  161 => 104,  157 => 103,  153 => 102,  149 => 101,  143 => 100,  140 => 99,  136 => 98,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="uk-modal" id="new_task">*/
/*      <div class="uk-modal-dialog">*/
/*          <div class="uk-modal-header">*/
/*              <h4 class="uk-modal-title">Send sms  here</h4>*/
/*          </div>*/
/*          <form action="{!! url('/fireOwingSMS')!!}" method="POST">*/
/*              <input type="hidden" name="_token" value="{!! csrf_token() !!}"> */
/* */
/* */
/*              <textarea cols="30" rows="4" name="message"class="md-input" required=""></textarea>*/
/* */
/* */
/*              <div class="uk-modal-footer uk-text-right">*/
/*                  <button type="submit" class="md-btn md-btn-flat md-btn-flat-primary md-btn-wave" id="snippet_new_save"><i   class="material-icons"   >smartphone</i>Send</button>    */
/*                  <button type="button" class="md-btn md-btn-flat uk-modal-close md-btn-wave">Close</button>*/
/*              </div>*/
/*          </form>*/
/*      </div>*/
/*  </div>*/
/*     <div style="">*/
/*      <div class="uk-margin-bottom" style="margin-left:1021px" >*/
/*          <a  href="#new_task" data-uk-modal="{ center:true }"> <i title="click to send sms to students owing"   class="material-icons md-36 uk-text-success"   >phonelink_ring message</i></a>*/
/* */
/*          <a href="#" class="md-btn md-btn-small md-btn-success uk-margin-right" id="printTable">Print Table</a>*/
/*          <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">*/
/*              <button class="md-btn md-btn-small md-btn-success"> columns <i class="uk-icon-caret-down"></i></button>*/
/*              <div class="uk-dropdown">*/
/*                  <ul class="uk-nav uk-nav-dropdown" id="columnSelector"></ul>*/
/*              </div>*/
/*          </div>*/
/*      </div>*/
/*  </div>*/
/*     <div class="uk-width-xLarge-1-1">*/
/*         <div class="md-card">*/
/*             <div class="md-card-content">*/
/* */
/*                 <h5>Student list</h5>*/
/* */
/*                 <div class="uk-overflow-container" id='print'>*/
/*          <center><span class="uk-text-success uk-text-bold">99 Records</span></center>*/
/*                 <table class="uk-table uk-table-hover uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_pager_filter"> */
/*      */
/*                 <thead>*/
/*                         <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Firstname</th>*/
/*                             <th>Surname</th>*/
/*                             <th>Fullname</th>*/
/*                             <th>Dob</th>*/
/*                             <th>Title</th>*/
/*                             <th>Gender</th>*/
/*                             <th>Indexno</th>*/
/*                             <th>Age</th>*/
/*                             <th>Othernames</th>*/
/*                             <th>Studenttype</th>*/
/*                             <th>Status</th>*/
/*                             <th>Classadmitted</th>*/
/*                             <th>Currentclass</th>*/
/*                             <th>Waecindexno</th>*/
/*                             <th>Hometown</th>*/
/*                             <th>Address</th>*/
/*                             <th>Region</th>*/
/*                             <th>Phone</th>*/
/*                             <th>Formerschool</th>*/
/*                             <th>Programme</th>*/
/*                             <th>House</th>*/
/*                             <th>Nationality</th>*/
/* */
/*                             <th>Parentname</th>*/
/*                             <th>Parentaddress</th>*/
/*                             <th>Parentphone</th>*/
/*                             <th>Parentemail</th>*/
/*                             <th>Studentliveswith</th>*/
/*                             <th>Schoolarship</th>*/
/*                             <th>Subjectcombination</th>*/
/*                             <th>Yeargroup</th>*/
/*                             <th>Issues</th>*/
/*                             <th>Termbill</th>*/
/*                             <th>Ptaowing</th>*/
/*                             <th>Academicbillowing</th>*/
/*                             <th>Disabilty</th>*/
/*                             <th>Residencestatus</th>*/
/*                             <th>Religion</th>*/
/*                             <th>Bloodgroup</th>*/
/*                             <th>Sickling</th>*/
/*                             <th>Nhisno</th>*/
/*                             <th>Dateadded</th>*/
/*                             <th>Parentoccupation</th>*/
/*                             <th>Email</th>*/
/*                             <th>Boardingowing</th>*/
/*                             <th>Actions</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for student in students %}*/
/*                             <tr>*/
/*                                 <td><a href="{{ path('student_show', { 'id': student.id }) }}">{{ student.id }}</a></td>*/
/*                                 <td>{{ student.firstName }}</td>*/
/*                                 <td>{{ student.surname }}</td>*/
/*                                 <td>{{ student.fullName }}</td>*/
/*                                 <td>{{ student.dob }}</td>*/
/*                                 <td>{{ student.title }}</td>*/
/*                                 <td>{{ student.gender }}</td>*/
/*                                 <td>{{ student.indexNo }}</td>*/
/*                                 <td>{{ student.age }}</td>*/
/*                                 <td>{{ student.othernames }}</td>*/
/*                                 <td>{{ student.studentType }}</td>*/
/*                                 <td>{{ student.status }}</td>*/
/*                                 <td>{{ student.classAdmitted }}</td>*/
/*                                 <td>{{ student.currentClass }}</td>*/
/*                                 <td>{{ student.waecIndexNo }}</td>*/
/*                                 <td>{{ student.hometown }}</td>*/
/*                                 <td>{{ student.address }}</td>*/
/*                                 <td>{{ student.region }}</td>*/
/*                                 <td>{{ student.phone }}</td>*/
/*                                 <td>{{ student.formerSchool }}</td>*/
/*                                 <td>{{ student.programme }}</td>*/
/*                                 <td>{{ student.house }}</td>*/
/*                                 <td>{{ student.nationality }}</td>*/
/*                                 <td>{{ student.dateAdmitted }}</td>*/
/*                                 <td>{{ student.parentName }}</td>*/
/*                                 <td>{{ student.parentAddress }}</td>*/
/*                                 <td>{{ student.parentPhone }}</td>*/
/*                                 <td>{{ student.parentEmail }}</td>*/
/*                                 <td>{{ student.studentLivesWith }}</td>*/
/*                                 <td>{{ student.schoolarship }}</td>*/
/*                                 <td>{{ student.subjectCombination }}</td>*/
/*                                 <td>{{ student.yearGroup }}</td>*/
/*                                 <td>{{ student.issues }}</td>*/
/*                                 <td>{{ student.termBill }}</td>*/
/*                                 <td>{{ student.ptaOwing }}</td>*/
/*                                 <td>{{ student.academicBillOwing }}</td>*/
/*                                 <td>{{ student.disabilty }}</td>*/
/*                                 <td>{{ student.residenceStatus }}</td>*/
/*                                 <td>{{ student.religion }}</td>*/
/*                                 <td>{{ student.bloodGroup }}</td>*/
/*                                 <td>{{ student.sickling }}</td>*/
/*                                 <td>{{ student.nhisNo }}</td>*/
/*                                 <td>{{ student.parentOccupation }}</td>*/
/*                                 <td>{{ student.email }}</td>*/
/*                                 <td>{{ student.boardingOwing }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('student_show', { 'id': student.id }) }}">show</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="{{ path('student_edit', { 'id': student.id }) }}">edit</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
