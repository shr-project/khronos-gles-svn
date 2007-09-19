<?php include("/home/virtual/khronos.org/var/www/html/_inc/doctype.txt"); ?>
<head>
<title>Khronos OpenGL ES API Registry</title>
<?php include("/home/virtual/khronos.org/var/www/html/_inc//registry/registry_head.txt"); ?>
</head>
<body id="developers" class="registry">
<?php include("/home/virtual/khronos.org/var/www/html/_inc/registry/registry_body.txt"); ?>
<h1 class="pagetitle">Khronos OpenGL ES API Registry</h1> <!--	top left shadow-->
<div id="mainformat">


<h1 style="text-align:center"> Khronos OpenGL ES API Registry </h1>

<p> The OpenGL ES API registry contains specifications of the core API;
    specifications of Khronos- and vendor-approved OpenGL ES extensions;
    header files corresponding to the specifications; and other related
    documentation. The companion
    <a href="http://www.opengl.org/registry/"> OpenGL API Registry </a>
    has related material including the enumerant registry (shared
    between OpenGL ES and OpenGL).

<h6> OpenGL ES Core API Specification, Headers, and Documentation </h6>

<p> The current versions of OpenGL ES are OpenGL ES 2.0 (programmable
    hardware) and OpenGL ES 1.1 (fixed-function hardware). For
    additional specifications, headers, and documentation not listed
    below, see the <a
    href="http://www.khronos.org/developers/specs/">Khronos.org
    Developer Pages</a>. </p>

<h6> OpenGL ES 2.0 Specific </h6>

<ul>
<li> OpenGL ES 2.0.21
     <a href="specs/2.0/es_cm_spec_2.0.21.pdf">
     Difference Specification </a> (August 22, 2007). </li>
<li> OpenGL ES Shading Language 1.0.14
     <a href="specs/2.0/GLSL_ES_Specification_1.0.14.pdf">
     Specification </a> (March 26, 2007). </li>
<li> <a href="api/2.0/gl2.h"> gl2.h </a> for OpenGL ES 2.0 (August 22,
     2007). </li>
<li> <a href="api/2.0/gl2ext.h"> gl2ext.h </a> for OpenGL ES 2.0
     extensions (May 7, 2007). </li>
</ul>


<h6> OpenGL ES 1.1 Specific </h6>

<ul>
<li> OpenGL ES 1.1.10 <a href="specs/1.1/es_full_spec.1.1.10.pdf"> Full
     Specification </a> and <a href="specs/1.1/es_cm_spec_1.1.10.pdf">
     Difference Specification </a> (April 4, 2007). </li>
<li> <a href="api/1.1/gl.h"> gl.h </a> for OpenGL ES 1.1 (April 18,
     2007). </li>
<li> <a href="specs/1.1/opengles_spec_1_1_extension_pack.pdf"> OpenGL ES
     1.1.03 Extension Pack </a> (July 19, 2005). </li>
</ul>

<h6> OpenGL ES 1.0 Specific </h6>

<ul>
<li> <a href="specs/1.0/opengles_spec_1_0.pdf"> OpenGL ES 1.0.02
     Specification </a>. </li>
<li> <a href="api/1.0/gl.h"> gl.h </a> for OpenGL ES 1.0. </li>
<li> <a href="specs/1.0/opengles_1_0_manual.pdf"> OpenGL ES 1.0 and EGL 1.0
     Reference Manual </a> (updated December 19, 2003). </li>
</ul>

<!--
<h6> Extension Header Files </h6>
<p> The <a href="api/eglext.h"> eglext.h </a> header file defining
    interfaces for optional extensions is provided here. This header
    define interfaces (enumerants, prototypes, and for platforms
    supporting dynamic runtime extension queries, such as Linux and
    Microsoft Windows, function pointer typedefs) for all registered
    extensions. </p>

<h6> Enumerant and Function Registry </h6>

<p> The database from which  enumerant ranges are reserved is called
    <tt><a href="api/eglenum.spec">eglenum.spec</a></tt>. It is in a
    custom text file format. </p>
-->
<h6>Extension Specifications</h6>
<ol>
<li value=1> <a href="extensions/OES/OES_blend_equation_separate.txt">GL_OES_blend_equation_separate</a>
</li>
<li value=2> <a href="extensions/OES/OES_blend_func_separate.txt">GL_OES_blend_func_separate</a>
</li>
<li value=3> <a href="extensions/OES/OES_blend_subtract.txt">GL_OES_blend_subtract</a>
</li>
<li value=4> <a href="extensions/OES/OES_byte_coordinates.txt">GL_OES_byte_coordinates</a>
</li>
<li value=5> <a href="extensions/OES/OES_compressed_ETC1_RGB8_texture.txt">GL_OES_compressed_ETC1_RGB8_texture</a>
</li>
<li value=6> <a href="extensions/OES/OES_compressed_paletted_texture.txt">GL_OES_compressed_paletted_texture</a>
</li>
<li value=7> <a href="extensions/OES/OES_draw_texture.txt">GL_OES_draw_texture</a>
</li>
<li value=8> <a href="extensions/OES/OES_extended_matrix_palette.txt">GL_OES_extended_matrix_palette</a>
</li>
<li value=9> <a href="extensions/OES/OES_fixed_point.txt">GL_OES_fixed_point</a>
</li>
<li value=10> <a href="extensions/OES/OES_framebuffer_object.txt">GL_OES_framebuffer_object</a>
</li>
<li value=11> <a href="extensions/OES/OES_matrix_get.txt">GL_OES_matrix_get</a>
</li>
<li value=12> <a href="extensions/OES/OES_matrix_palette.txt">GL_OES_matrix_palette</a>
</li>
<li value=14> <a href="extensions/OES/OES_point_size_array.txt">GL_OES_point_size_array</a>
</li>
<li value=15> <a href="extensions/OES/OES_point_sprite.txt">GL_OES_point_sprite</a>
</li>
<li value=16> <a href="extensions/OES/OES_query_matrix.txt">GL_OES_query_matrix</a>
</li>
<li value=17> <a href="extensions/OES/OES_read_format.txt">GL_OES_read_format</a>
</li>
<li value=18> <a href="extensions/OES/OES_single_precision.txt">GL_OES_single_precision</a>
</li>
<li value=19> <a href="extensions/OES/OES_stencil_wrap.txt">GL_OES_stencil_wrap</a>
</li>
<li value=20> <a href="extensions/OES/OES_texture_cube_map.txt">GL_OES_texture_cube_map</a>
</li>
<li value=21> <a href="extensions/OES/OES_texture_env_crossbar.txt">GL_OES_texture_env_crossbar</a>
</li>
<li value=22> <a href="extensions/OES/OES_texture_mirrored_repeat.txt">GL_OES_texture_mirrored_repeat</a>
</li>
<li value=23> <a href="extensions/OES/OES_egl_image.txt">GL_OES_egl_image</a>
</li>
<li value=24> <a href="extensions/OES/OES_depth24.txt">GL_OES_depth24</a>
</li>
<li value=25> <a href="extensions/OES/OES_depth32.txt">GL_OES_depth32</a>
</li>
<li value=26> <a href="extensions/OES/OES_element_index_uint.txt">GL_OES_element_index_uint</a>
</li>
<li value=27> <a href="extensions/OES/OES_fbo_render_mipmap.txt">GL_OES_fbo_render_mipmap</a>
</li>
<li value=28> <a href="extensions/OES/OES_fragment_precision_high.txt">GL_OES_fragment_precision_high</a>
</li>
<li value=29> <a href="extensions/OES/OES_mapbuffer.txt">GL_OES_mapbuffer</a>
</li>
<li value=30> <a href="extensions/OES/OES_rgb8_rgba8.txt">GL_OES_rgb8_rgba8</a>
</li>
<li value=31> <a href="extensions/OES/OES_stencil1.txt">GL_OES_stencil1</a>
</li>
<li value=32> <a href="extensions/OES/OES_stencil4.txt">GL_OES_stencil4</a>
</li>
<li value=33> <a href="extensions/OES/OES_stencil8.txt">GL_OES_stencil8</a>
</li>
<li value=34> <a href="extensions/OES/OES_texture_3D.txt">GL_OES_texture_3D</a>
</li>
<li value=35> <a href="extensions/OES/OES_texture_float_linear.txt">GL_OES_texture_float_linear</a>
     <br> <a href="extensions/OES/OES_texture_float_linear.txt">GL_OES_texture_half_float_linear</a>
</li>
<li value=36> <a href="extensions/OES/OES_texture_float.txt">GL_OES_texture_float</a>
     <br> <a href="extensions/OES/OES_texture_float.txt">GL_OES_texture_half_float</a>
</li>
<li value=37> <a href="extensions/OES/OES_texture_npot.txt">GL_OES_texture_npot</a>
</li>
<li value=38> <a href="extensions/OES/OES_vertex_half_float.txt">GL_OES_vertex_half_float</a>
</li>
</ol>
<?php include("/home/virtual/khronos.org/var/www/html/_inc/registry/registry_footer.txt"); ?>
</body>  <!-- END pagewrapper -->
</html>
