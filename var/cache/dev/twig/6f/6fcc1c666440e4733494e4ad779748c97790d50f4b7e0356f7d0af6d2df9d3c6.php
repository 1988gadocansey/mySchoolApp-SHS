<?php

/* student/show.html.twig */
class __TwigTemplate_fb906e7445387c93467bd8f81e74369539ed1f0f0cfaebf7dab1906c75af1304 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/show.html.twig", 1);
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
        $__internal_a48979217a9446996051f7af1ff426ed9a0aba3997560a47226846a8ef6b0036 = $this->env->getExtension("native_profiler");
        $__internal_a48979217a9446996051f7af1ff426ed9a0aba3997560a47226846a8ef6b0036->enter($__internal_a48979217a9446996051f7af1ff426ed9a0aba3997560a47226846a8ef6b0036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48979217a9446996051f7af1ff426ed9a0aba3997560a47226846a8ef6b0036->leave($__internal_a48979217a9446996051f7af1ff426ed9a0aba3997560a47226846a8ef6b0036_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7949af8dff7348fc597cece9a5197004d74f13d6e8fb6ad5cb448facc531c446 = $this->env->getExtension("native_profiler");
        $__internal_7949af8dff7348fc597cece9a5197004d74f13d6e8fb6ad5cb448facc531c446->enter($__internal_7949af8dff7348fc597cece9a5197004d74f13d6e8fb6ad5cb448facc531c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Student</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surname</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "surname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fullname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "fullName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dob</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dob", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "gender", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Indexno</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "indexNo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "age", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Othernames</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "othernames", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Studenttype</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "studentType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Classadmitted</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "classAdmitted", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Currentclass</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "currentClass", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Waecindexno</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "waecIndexNo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hometown</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "hometown", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "region", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "phone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Formerschool</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "formerSchool", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Programme</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "programme", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>House</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "house", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nationality", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Dateadmitted</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "dateAdmitted", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parentname</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "parentName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parentaddress</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "parentAddress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parentphone</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "parentPhone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parentemail</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "parentEmail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Studentliveswith</th>
                <td>";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "studentLivesWith", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Schoolarship</th>
                <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "schoolarship", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Subjectcombination</th>
                <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "subjectCombination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Yeargroup</th>
                <td>";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "yearGroup", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Issues</th>
                <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "issues", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Termbill</th>
                <td>";
        // line 142
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "termBill", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ptaowing</th>
                <td>";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "ptaOwing", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Academicbillowing</th>
                <td>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "academicBillOwing", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Disabilty</th>
                <td>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "disabilty", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Residencestatus</th>
                <td>";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "residenceStatus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Religion</th>
                <td>";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "religion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bloodgroup</th>
                <td>";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "bloodGroup", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sickling</th>
                <td>";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "sickling", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nhisno</th>
                <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "nhisNo", array()), "html", null, true);
        echo "</td>
            </tr>
             
            <tr>
                <th>Parentoccupation</th>
                <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "parentOccupation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Boardingowing</th>
                <td>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "boardingOwing", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 194
        echo $this->env->getExtension('routing')->getPath("student_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("student_edit", array("id" => $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 200
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 202
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7949af8dff7348fc597cece9a5197004d74f13d6e8fb6ad5cb448facc531c446->leave($__internal_7949af8dff7348fc597cece9a5197004d74f13d6e8fb6ad5cb448facc531c446_prof);

    }

    public function getTemplateName()
    {
        return "student/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 202,  379 => 200,  373 => 197,  367 => 194,  357 => 187,  350 => 183,  343 => 179,  335 => 174,  328 => 170,  321 => 166,  314 => 162,  307 => 158,  300 => 154,  293 => 150,  286 => 146,  279 => 142,  272 => 138,  265 => 134,  258 => 130,  251 => 126,  244 => 122,  237 => 118,  230 => 114,  223 => 110,  216 => 106,  209 => 102,  202 => 98,  195 => 94,  188 => 90,  181 => 86,  174 => 82,  167 => 78,  160 => 74,  153 => 70,  146 => 66,  139 => 62,  132 => 58,  125 => 54,  118 => 50,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Student</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ student.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Firstname</th>*/
/*                 <td>{{ student.firstName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Surname</th>*/
/*                 <td>{{ student.surname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fullname</th>*/
/*                 <td>{{ student.fullName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dob</th>*/
/*                 <td>{{ student.dob }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ student.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Gender</th>*/
/*                 <td>{{ student.gender }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Indexno</th>*/
/*                 <td>{{ student.indexNo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Age</th>*/
/*                 <td>{{ student.age }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Othernames</th>*/
/*                 <td>{{ student.othernames }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Studenttype</th>*/
/*                 <td>{{ student.studentType }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Status</th>*/
/*                 <td>{{ student.status }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Classadmitted</th>*/
/*                 <td>{{ student.classAdmitted }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Currentclass</th>*/
/*                 <td>{{ student.currentClass }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Waecindexno</th>*/
/*                 <td>{{ student.waecIndexNo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Hometown</th>*/
/*                 <td>{{ student.hometown }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Address</th>*/
/*                 <td>{{ student.address }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Region</th>*/
/*                 <td>{{ student.region }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Phone</th>*/
/*                 <td>{{ student.phone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Formerschool</th>*/
/*                 <td>{{ student.formerSchool }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Programme</th>*/
/*                 <td>{{ student.programme }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>House</th>*/
/*                 <td>{{ student.house }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nationality</th>*/
/*                 <td>{{ student.nationality }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Dateadmitted</th>*/
/*                 <td>{{ student.dateAdmitted }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Parentname</th>*/
/*                 <td>{{ student.parentName }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Parentaddress</th>*/
/*                 <td>{{ student.parentAddress }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Parentphone</th>*/
/*                 <td>{{ student.parentPhone }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Parentemail</th>*/
/*                 <td>{{ student.parentEmail }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Studentliveswith</th>*/
/*                 <td>{{ student.studentLivesWith }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Schoolarship</th>*/
/*                 <td>{{ student.schoolarship }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Subjectcombination</th>*/
/*                 <td>{{ student.subjectCombination }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Yeargroup</th>*/
/*                 <td>{{ student.yearGroup }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Issues</th>*/
/*                 <td>{{ student.issues }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Termbill</th>*/
/*                 <td>{{ student.termBill }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Ptaowing</th>*/
/*                 <td>{{ student.ptaOwing }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Academicbillowing</th>*/
/*                 <td>{{ student.academicBillOwing }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Disabilty</th>*/
/*                 <td>{{ student.disabilty }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Residencestatus</th>*/
/*                 <td>{{ student.residenceStatus }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Religion</th>*/
/*                 <td>{{ student.religion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Bloodgroup</th>*/
/*                 <td>{{ student.bloodGroup }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sickling</th>*/
/*                 <td>{{ student.sickling }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nhisno</th>*/
/*                 <td>{{ student.nhisNo }}</td>*/
/*             </tr>*/
/*              */
/*             <tr>*/
/*                 <th>Parentoccupation</th>*/
/*                 <td>{{ student.parentOccupation }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ student.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Boardingowing</th>*/
/*                 <td>{{ student.boardingOwing }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('student_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('student_edit', { 'id': student.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
