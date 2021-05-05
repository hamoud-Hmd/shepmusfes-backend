<?php

namespace Database\Seeders;

use App\Models\Committee;
use Illuminate\Database\Seeder;

class CommitteesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Committee::create(['name' => "اللجنة العليا", 'description' => "- اللجنة العليا لمهرجان موسيقى الرعاة الدولي هي اللجنة المكلفة بالإدارة التنفيذية للمهرجان وتتألف من رئيس و مدير تنفيذي ومدير مساعدة ورؤساء اللجان المختصة وتهتم بإدارة المهرجان ووضع سياساته العامة بالنظر في المقترحات المقدمة من طرف اللجان الأخرى وإجازتها، ووضع خطط العمل الميداني حسب الزمن، إجازة واعتماد الدراسة الفنية والمالية."]);
        Committee::create(['name' => "لجنة السفراء", 'description' => "سفراء المهرجان عبارة عن مجموعة واسعة من الاصدقاء المثقفين المقيمين في الخارج اساسا والذين يشاركوننا في الايمان والاعجاب بالفكرة وقد عبروا عن استعدادهم لتمثيل المهرجان والتعريف به في مختلف دول العالم. وسيقومون بمساعدتنا في التواصل مع المشاركين والمساهمين والداعمين من البلدان التي يقيمون فيها. بوجودهم معنا وبدورهم القيّم نتوخى الوصول باسرع وقت ممكن الى العالمية من اوسع أبوابها."]);
        Committee::create(['name' => "لجنة العلاقات الخارجية", 'description' => "لجنة العلاقات الخارجية تتشكل من شخصيات وازنة ثقافيا و اجتماعيا تتولى الاتصال المباشر بالمنظمات و المؤسسات و الشخصيات التي قد تساهم ماديا أو معنويا في انجاح المهرجان."]);
        Committee::create(['name' => "اللجنة الإعلامية", 'description' => "تتكون لجنة الإعلام للمهرجان من وحدات متخصصة تعمل كل منها وفق استراتيجية ورؤية شاملة لللجنة وبقدر من المرونة بما يحقق لها قدرة على الحركة للوصول للخبر والمعلومة في الوقت المناسب وبالدقة والمصداقية اللازمة ."]);
        Committee::create(['name' => "اللجنة الفنية", 'description' => "تتكفل هذه اللجنة بتنظيم و إدارة كافة المجالات الفنية للمهرجان ، سينما ، مسرح ، فلكلور، معارض و مسابقات وسباقات المهرجان . و قد عكفت هذه اللجنة منذو شهر أغسطس من العام الماضي على تهيئة النسخة الأولى من المهرجان و ذلك من خلال الرحلات الميدانية والاستكشافية للمنطقه و الإتصال بالفاعلين و المهتدين من الشباب في مجالات الثقافة و الفنون ، حيث تم تقديم دورات تكوينية في مجالي السنما و الفنون التشكيلة."]);
        Committee::create(['name' => "لجنة الضيافة والمرافقات", 'description' => "هي المسؤولة عن استقبال جميع ضيوف المهرجان وطاقمه الفني، وتوفير السكن لهم بالإضافة إلى توفير المعاش والنقل والترفيه طيلة مدة إقامتهم، كما تنظم رحلات سياحية استكشافية لبعض الضيوف من اجل إكتشاف مقدرات المنطقة السياحية."]);
        Committee::create(['name' => "اللجنة المالية", 'description' => "مكلفة بإعداد خطة مالية وترجمتها إلى موازنة قابلة للتنفيذ، يتم إعتمادها من طرف اللجنة العليا، لتوفير التمويل اللازم للمهرجان. كما تسعى إلى إستقطاب الدعم والتمويل اللازم، بالبحث عن الرعاية و الشراكات الممكنة، وذلك بالتعاون مع بعض لجان المهرجان، هي المسؤولة عن تسيير كافة الحسابات من خلال وثائق وسجلات وكشوف قابلة للمراجعة والتدقيق في أي وقت. تعتمد على آلية الصرف طبقًا لبنود الميزانية المعتمدة؛ إلا في حال الاستثناءات التي تحددها اللجنة العليا للمهرجان بقرار مكتوب، كما تتكفل بإعداد تقارير عن الحالة المالية (من إيرادات ومصاريف) يتم تقديمها بشكل دوري."]);
        Committee::create(['name' => "لجنة التنظيم", 'description' => "هي المسؤولة عن تنظيم المهرجان، الزوار والطواقم والفرق كما ستشرف بالتعاون مع اللجنية على كل الأنشطة من ^سهرات، ندوات، محاضرات، وسباقات ومسابقات ومعارض^، في ساحة الفنون ومزرعة فريدي. هي المسؤولة عن امن المهرجان بالتعاون مع فرق الأمن ^الشرطة وغيرها^. ايضا ستشرف على تجهيز وتأثيث القرى النموذجية ^لفريك-لكصر^ وتنظيم زوارهم وانشطتهم."]);
        Committee::create(['name' => "مكتب الطينطان", 'description' => "يشكل مكتب الطينطان ظلا للجنة العليا للمهرجان، وهو  المكلف بالعمل الميداني في الطنيطان؛ ويعمل بالتوازي مع اللجنة الغليا بانواكشوط على التحضير للمهرجان، و كل عضو بالمكتب يمثل إحدى اللجان."]);


    }
}
