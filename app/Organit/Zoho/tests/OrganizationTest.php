<?php



namespace {
  use Organit\Zoho\Zoho;
  use Organit\Zoho\Organization;




  class OrganizationTest extends TestCase
  {
    /** @test */
    public function it_fetch_organization_list()
    {

      Auth::loginUsingId(1);

      $firstOrg = Zoho::organization()->get();

      $this->assertTrue(count($firstOrg)>0);

    }




    /** @test */
    public function it_fetch_organization_object()
    {

      Auth::loginUsingId(1);

      $org = Zoho::organization()->getByID('637272853');

      $this->assertTrue($org->organization_id=='637272853');

    }





  }

}
