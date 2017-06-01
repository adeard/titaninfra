<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/gantt.js"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script src="{$PATH_THEMES}/assets/admin/pages/scripts/charts-amcharts.js"></script>

{literal}
<script>
jQuery(document).ready(function() {
   ChartsAmcharts.init();
});
</script>
{/literal}
<!-- BEGIN LOAD CONTENT-->
<div class="page-content-body">
	{$this->partial("layout/breadcrumbs")}
    <h3 class="page-title"></h3>
                
    <!-- BEGIN MAIN STATS -->
    <div class="tiles">
        <div class="col-lg-4">
			<div class="dashboard-stat blue" style="height:155px">
				<div class="visual">
					<i class="fa fa-truck"></i>
				</div>
				<div class="details">
					<div class="number">
						 400
					</div>
					<div class="desc">
						 Total Vehicle
					</div>
                    <div class="desc">
                        <hr>
					</div>
				</div>
				<!-- <a class="more" href="javascript:;"></a> -->
			</div>
		</div>
		<div class="col-lg-4">
			<div class="dashboard-stat green-turquoise" style="height:155px">
				<div class="visual">
					<i class="fa fa-truck"></i>
				</div>
				<div class="details">
					<div class="number">
						 <b>375</b> <small>( 93.75% )</small>
					</div>
					<div class="desc">
						 Vehicle Active
					</div>
                    <div class="desc">
                        <hr>
						 Ready : <b>25</b> / On Journey : <b>350</b>
					</div>
				</div>
				<!-- <a class="more" href="javascript:;"></a> -->
			</div>
		</div>
		<div class="col-lg-4">
			<div class="dashboard-stat red-intense" style="height:155px">
				<div class="visual">
					<i class="fa fa-truck"></i>
				</div>
				<div class="details">
					<div class="number">
						 <b>25</b> <small>( 6.25% )</small>
					</div>
					<div class="desc">
						 Vehicle Inactive
					</div>
                    <div class="desc">
                        <hr>
                        Breakdown : <b>5</b> / Repair : <b>20</b>
					</div>
				</div>
				<!-- <a class="more" href="javascript:;"></a> -->
			</div>
		</div>
      	
    </div>
    <!-- END MAIN STATS -->
    
    <!-- BEGIN ROW -->
	<div class="row">
		<div class="col-md-6">
			<!-- BEGIN CHART PORTLET-->
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Comparison Coal Production 2017</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			<!-- END CHART PORTLET-->
		</div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Summary Coal Production Site Muara Enim</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv2" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Daily Data</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv3" class="chart" style="height: 500px;">
					</div>
                    <div>
                        <b>Legend:</b><br>
                        <button type="button" name="button" class="btn btn-sm" style="background-color:#04D215"></button> On Progress&nbsp;<button type="button" name="button" class="btn btn-sm" style="background-color:#FAAC58"></button> Surplus Target&nbsp;<button type="button" name="button" class="btn btn-sm" style="background-color:#FF0000"></button> Under Target
                    </div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Coal Daily Production - May 2017</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv4" class="chart" style="height: 500px;">
					</div>
                    <div>
                        <b>Legend:</b><br>
                        <img src="https://www.amcharts.com/lib/3/images/star.png?x" alt="" width="20" height="20"> On Target Production &nbsp;<img src="https://www.amcharts.com/lib/3/images/redstar.png" alt=""width="20" height="20"> Under Target Production
                    </div>
                    <div class="table-responsive">
                        <br>
                        <table class="table table-bordered table-responsive">
                            <tr>
                                <th>&nbsp</th>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <th>SUM</th>
                                <td>21.000</td>
                                <td>41.100</td>
                                <td>60.100</td>
                                <td>81.400</td>
                                <td>103.100</td>
                                <td>103.100</td>
                                <td>146.350</td>
                                <td>156.350</td>
                                <td>177.950</td>
                                <td>198.950</td>
                                <td>198.950</td>
                                <td>242.350</td>
                                <td>264.350</td>
                                <td>287.100</td>
                                <td>302.600</td>
                            </tr>
                            <tr>
                                <th>DAILY</th>
                                <td>21.100</td>
                                <td>20.000</td>
                                <td>21.500</td>
                                <td>20.000</td>
                                <td>21.300</td>
                                <td>0</td>
                                <td>21.750</td>
                                <td>21.500</td>
                                <td>177.950</td>
                                <td>10.000</td>
                                <td>0</td>
                                <td>21.900</td>
                                <td>21.500</td>
                                <td>22.000</td>
                                <td>15.500</td>
                            </tr>
                        </table>
                    </div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-12">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Road Management</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<!-- <div id="chartdiv5" class="chart" style="height: 500px;">
					</div> -->
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>&nbsp;</th>
                                <td style="background-color:#FF0000"></td>
                                <td style="background-color:#FF0000"></td>
                                <td style="background-color:#F7FE2E"></td>
                                <td style="background-color:#F7FE2E"></td>
                                <td style="background-color:#F7FE2E"></td>
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#04D215"></td>
                                
                                <td style="background-color:#F7FE2E"></td>
                                
                                <td style="background-color:#FF0000"></td>
                                
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                                <td style="background-color:#04D215"></td>
                            </tr>
                            <tr>
                                <th>KM</th>
                                <td align="center"><b>0</b></td>
                                <td align="center"><b>1</b></td>
                                <td align="center"><b>2</b></td>
                                <td align="center"><b>3</b></td>
                                <td align="center"><b>4</b></td>
                                <td align="center"><b>5</b></td>
                                <td align="center"><b>6</b></td>
                                <td align="center"><b>7</b></td>
                                <td align="center"><b>8</b></td>
                                <td align="center"><b>9</b></td>
                                <td align="center"><b>10</b></td>
                                <td align="center"><b>11</b></td>
                                <td align="center"><b>12</b></td>
                                <td align="center"><b>13</b></td>
                                <td align="center"><b>14</b></td>
                                <td align="center"><b>15</b></td>
                                <td align="center"><b>16</b></td>
                                <td align="center"><b>17</b></td>
                                <td align="center"><b>18</b></td>
                                <td align="center"><b>19</b></td>
                                <td align="center"><b>20</b></td>
                                <td align="center"><b>21</b></td>
                                <td align="center"><b>22</b></td>
                                <td align="center"><b>23</b></td>
                                <td align="center"><b>24</b></td>
                                <td align="center"><b>25</b></td>
                                <td align="center"><b>26</b></td>
                                <td align="center"><b>27</b></td>
                                <td align="center"><b>28</b></td>
                                <td align="center"><b>29</b></td>
                                <td align="center"><b>30</b></td>
                                <td align="center"><b>31</b></td>
                                <td align="center"><b>32</b></td>
                                <td align="center"><b>33</b></td>
                                <td align="center"><b>34</b></td>
                                <td align="center"><b>35</b></td>
                                <td align="center"><b>36</b></td>
                                <td align="center"><b>37</b></td>
                                <td align="center"><b>38</b></td>
                                <td align="center"><b>39</b></td>
                                <td align="center"><b>40</b></td>
                                <td align="center"><b>41</b></td>
                                <td align="center"><b>42</b></td>
                                <td align="center"><b>43</b></td>
                                <td align="center"><b>44</b></td>
                                <td align="center"><b>45</b></td>
                                <td align="center"><b>46</b></td>
                                <td align="center"><b>47</b></td>
                                <td align="center"><b>48</b></td>
                                <td align="center"><b>49</b></td>
                                <td align="center"><b>50</b></td>
                                <td align="center"><b>51</b></td>
                                <td align="center"><b>52</b></td>
                                <td align="center"><b>53</b></td>
                                <td align="center"><b>54</b></td>
                                <td align="center"><b>55</b></td>
                                <td align="center"><b>56</b></td>
                                <td align="center"><b>57</b></td>
                                <td align="center"><b>58</b></td>
                                <td align="center"><b>59</b></td>
                                <td align="center"><b>60</b></td>
                                <td align="center"><b>61</b></td>
                                <td align="center"><b>62</b></td>
                                <td align="center"><b>63</b></td>
                                <td align="center"><b>64</b></td>
                                <td align="center"><b>65</b></td>
                                <td align="center"><b>66</b></td>
                                <td align="center"><b>67</b></td>
                                <td align="center"><b>68</b></td>
                                <td align="center"><b>69</b></td>
                                <td align="center"><b>70</b></td>
                                <td align="center"><b>71</b></td>
                                <td align="center"><b>72</b></td>
                                <td align="center"><b>73</b></td>
                                <td align="center"><b>74</b></td>
                                <td align="center"><b>75</b></td>
                                <td align="center"><b>76</b></td>
                                <td align="center"><b>77</b></td>
                                <td align="center"><b>78</b></td>
                                <td align="center"><b>79</b></td>
                                <td align="center"><b>80</b></td>
                                <td align="center"><b>81</b></td>
                                <td align="center"><b>82</b></td>
                                <td align="center"><b>83</b></td>
                                <td align="center"><b>84</b></td>
                                <td align="center"><b>85</b></td>
                                <td align="center"><b>86</b></td>
                                <td align="center"><b>87</b></td>
                                <td align="center"><b>88</b></td>
                                <td align="center"><b>89</b></td>
                                <td align="center"><b>90</b></td>
                                <td align="center"><b>91</b></td>
                                <td align="center"><b>92</b></td>
                                <td align="center"><b>93</b></td>
                                <td align="center"><b>94</b></td>
                                <td align="center"><b>95</b></td>
                                <td align="center"><b>96</b></td>
                                <td align="center"><b>97</b></td>
                                <td align="center"><b>98</b></td>
                                <td align="center"><b>99</b></td>
                                <td align="center"><b>100</b></td>
                                <td align="center"><b>101</b></td>
                                <td align="center"><b>102</b></td>
                                <td align="center"><b>103</b></td>
                                <td align="center"><b>104</b></td>
                                <td align="center"><b>105</b></td>
                                <td align="center"><b>106</b></td>
                                <td align="center"><b>107</b></td>
                                <td align="center"><b>108</b></td>
                                <td align="center"><b>109</b></td>
                                <td align="center"><b>110</b></td>
                                <td align="center"><b>111</b></td>
                                <td align="center"><b>112</b></td>
                                <td align="center"><b>113</b></td>
                                <td align="center"><b>114</b></td>
                                <td align="center"><b>115</b></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <br>
                        <b>Legend:</b><br>
                        <button type="button" name="button" class="btn btn-sm" style="background-color:#FF0000"></button> Average Speed 0 - 15 Kmph <br>
                        <button type="button" name="button" class="btn btn-sm" style="background-color:#F7FE2E"></button> Average Speed 16 - 30 Kmph
                        <br>
                        <button type="button" name="button" class="btn btn-sm" style="background-color:#04D215"></button> Average Speed >= 31 Kmph
                    </div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Operational Cost - June 2017</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Items Cost</th>
                                <th>Total Cost - June 2017</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    BBM Usage
                                    <ul>
                                        <li>BEIBEN Car</li>
                                        <li>SINO Car</li>
                                    </ul>
                                </td>
                                <td>
                                    &nbsp;
                                    <ul>
                                        <li>17.681.250.000</li>
                                        <li>10.608.750.000</li>
                                    </ul>
                                    <hr>
                                    Subtotal <b>28.290.000.000</b>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Spare Part
                                </td>
                                <td>
                                    2.000.000.000
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    SDM
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Total Operational Cost</b></td>
                                <td><b>30.290.000.000</b></td>
                            </tr>
                        </table>
                    </div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Operational Cost - Year 2017</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Items Cost</th>
                                <th>June 2017</th>
                                <th>May 2017</th>
                                <th>April 2017</th>
                                <th>Total Cost</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    BBM Usage
                                    <ul>
                                        <li>BEIBEN Car</li>
                                        <li>SINO Car</li>
                                    </ul>
                                </td>
                                <td>
                                    &nbsp;
                                    <ul>
                                        <li>17.681.250.000</li>
                                        <li>10.608.750.000</li>
                                    </ul>
                                    <hr>
                                    Subtotal <b>28.290.000.000</b>
                                </td>
                                <td>
                                    &nbsp;
                                    <ul>
                                        <li>19.500.600.000</li>
                                        <li>10.500.000.000</li>
                                    </ul>
                                    <hr>
                                    Subtotal <b>30.000.600.000</b>
                                </td>
                                <td>
                                    &nbsp;
                                    <ul>
                                        <li>20.210.000.000</li>
                                        <li>13.000.800.000</li>
                                    </ul>
                                    <hr>
                                    Subtotal <b>33.210.800.000</b>
                                </td>
                                <td>
                                    &nbsp;
                                    <ul>
                                        <li>57.391.850.000</li>
                                        <li>34.109.550.000</li>
                                    </ul>
                                    <hr>
                                    Subtotal <b>91.501.400.000</b>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    Spare Part
                                </td>
                                <td>
                                    2.000.000.000
                                </td>
                                <td>
                                    1.000.000.000
                                </td>
                                <td>
                                    15.000.000.000
                                </td>
                                <td>
                                    18.000.000.000
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    SDM
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    -
                                </td>
                                <td>
                                    -
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"><b>Total Operational Cost</b></td>
                                <td><b>109.501.400.000</b></td>
                            </tr>
                        </table>
                    </div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
	</div>
	<!-- END ROW -->
    
    <div class="clearfix"></div>
</div>
<!-- END LOAD CONTENT-->