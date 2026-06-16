<?php

namespace Database\Seeders;

use App\Models\LughOwlArticle;
use Illuminate\Database\Seeder;

class LughOwlEnTranslationSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->translations() as $slug => $data) {
            LughOwlArticle::where('slug', $slug)->update([
                'titre_en'       => $data['titre_en'],
                'description_en' => $data['description_en'],
                'contenu_en'     => $data['contenu_en'] ?? null,
            ]);
        }
    }

    private function translations(): array
    {
        return [
            // ── MODÈLES PHILOSOPHIQUES ────────────────────────────────────────
            'balance' => [
                'titre_en'       => "Lugh's Scale",
                'description_en' => "Lugh's Scale illustrates the balance between good and evil in our actions. It sheds light on the weight of every gesture and its impact, depending on the wisdom of the individuals involved.",
                'contenu_en'     => '<h2>Good and Evil: Two Opposing Forces</h2>
<p>Good and evil are like the two pans of a scale.</p>
<p>Evil attracts evil, just as good attracts good. A benevolent action, however small, can create a positive chain. Conversely, a malevolent action often generates negative consequences that spread. For example, an act of generosity frequently inspires other altruistic gestures, while an act of cruelty breeds resentment or revenge.</p>
<p>However, the weight of evil is often heavier to bear. An insult wounds more than a compliment delights. This shows how much evil leaves a deeper mark, making balance difficult to maintain.</p>
<h2>The Weight of Actions: Not All Equivalent</h2>
<p>Not all actions carry the same impact on the scale.</p>
<p>Some are light, such as a smile or a kind word. Others are heavy, like a betrayal or a life-saving act. The weight depends on the scope of the action, but also on the person it targets. For example, a malicious act directed at a vulnerable person, such as a child, weighs far heavier than harm directed at a wise and resilient individual capable of forgiveness.</p>
<p>Likewise, a benevolent gesture toward a wise person — who knows how to make the most of it and pass it on to others — carries a far greater positive weight.</p>
<h2>The Wise Person: Master of Balance</h2>
<p>Wisdom plays a key role in the scale.</p>
<p>A wise individual acts as a solid fulcrum. They forgive more easily, thus softening the impact of evil. For example, a wise person confronted with an unjust criticism will often choose not to respond with hostility, transforming a negative situation into an opportunity for learning or peace.</p>
<p>In contrast, an individual lacking wisdom suffers more from negative actions. Harm received may push them to respond with further harm, fuelling a vicious cycle. Conversely, good directed at a wise person is amplified: they turn it into a strength for themselves and for others.</p>
<h2>The Point of No Return: The Weight of Cruelty</h2>
<p>There are actions so cruel that they weigh inexorably on the side of evil.</p>
<p>These acts, which cross a certain threshold of cruelty, become immeasurable. They destroy the balance of the scale and mark forever those who fall victim to them. A tragic example would be gratuitous violence inflicted on innocents, such as the atrocities of war. In such cases, even the forgiveness of a wise person cannot entirely erase the gravity of the act.</p>
<p>This idea underlines the importance of reflecting on our choices. A bad action can leave an indelible imprint, impossible to compensate, while a lasting good reinforces the overall balance.</p>
<h2>Maintaining Balance: A Constant Effort</h2>
<p>Lugh\'s Scale demands continuous vigilance to remain in equilibrium.</p>
<p>Every action, every thought, and every choice influences the weight of the scale. We must cultivate good, even in small things: a kind word, a helpful gesture, attentive listening. At the same time, we must be careful not to be carried away by negative impulses.</p>
<p>For example, in a conflict, choosing dialogue rather than aggression allows balance to be maintained. By seeking to understand rather than to wound, we tip the scale toward good.</p>
<hr>
<p>Lugh\'s Scale is a powerful metaphor for understanding the impact of our actions. It reminds us that every gesture counts, and that wisdom is essential to soften evil and amplify good. Cultivating this balance is a path toward a more harmonious and meaningful life.</p>',
            ],
            'boussole' => [
                'titre_en'       => "Lugh's Compass",
                'description_en' => "A metaphysical concept that guides human beings toward wisdom and divine unity, by distinguishing virtues from vices through a spiritual compass oriented toward the good.",
            ],
            'lanterne' => [
                'titre_en'       => "Lugh's Lantern",
                'description_en' => "A luminous metaphor for exploring wisdom, inner balance and the challenges linked to our personal radiance — whether discreet or dazzling.",
            ],
            'lunettes' => [
                'titre_en'       => "Lugh's Glasses",
                'description_en' => "A metaphor for understanding the importance of observing the past, analysing the present and preparing for the future with wisdom, clear-sightedness and resilience.",
            ],
            'pendule' => [
                'titre_en'       => "Lugh's Pendulum",
                'description_en' => "A metaphor for understanding the natural oscillations of life between strength and weakness, and learning to navigate with balance and effectiveness despite these movements.",
            ],
            'pont' => [
                'titre_en'       => "Lugh's Bridge",
                'description_en' => "An allegory illustrating the journey from ignorance to wisdom — a balance between inner and outer knowledge that allows us to move forward with harmony and lucidity.",
            ],
            'reservoir' => [
                'titre_en'       => "Lugh's Reservoir",
                'description_en' => "A metaphor for the process of transforming knowledge into wisdom, where water represents knowledge and fire represents assimilation, leading to spiritual and intellectual enrichment.",
            ],

            // ── IDÉES IMMUABLES ───────────────────────────────────────────────
            'acteur-spectateur' => [
                'titre_en'       => 'Actor and Spectator – Reflection and Temperance',
                'description_en' => 'Life places us in the roles of actor and spectator. Learning to juggle between thoughtful action and tempered observation helps us find balance and wisdom.',
            ],
            'bouc-emissaire' => [
                'titre_en'       => 'Scapegoat – Hatred Catcher',
                'description_en' => "The concept of the scapegoat shows how a society or an individual designates someone to carry hatred and ills, diverting attention from their own weaknesses or mistakes.",
            ],
            'capitalisme' => [
                'titre_en'       => 'Capitalism, Progressivism and Idealism',
                'description_en' => 'Capitalism, progressivism and idealism are forces shaping contemporary society, but in a context where the balance of values is increasingly threatened. Between economic excesses and psychological impacts, does the pursuit of progress truly lead us toward a better world?',
            ],
            'consommation' => [
                'titre_en'       => 'Consumption, Capitalism and Education',
                'description_en' => 'Although education can play an essential role in shaping responsible individuals, consumer society — fuelled by media and influencers — undermines these efforts by promoting a culture of buying and appearance.',
            ],
            'creation-destruction' => [
                'titre_en'       => 'Creation, Transformation and Destruction',
                'description_en' => 'Creation, transformation and destruction are three forces that shape the world. Each stage, though distinct, is necessary for the evolution of societies and individuals.',
            ],
            'danger-fiction' => [
                'titre_en'       => 'Danger, Fiction and Imagination',
                'description_en' => 'Fiction and imagination can be powerful means of escape, but remaining a spectator of the world, without actively confronting reality, can lead to a danger: never taking action.',
            ],
            'divertissement-peur' => [
                'titre_en'       => 'Entertainment and Fear of Absence',
                'description_en' => 'Modern entertainment often becomes a way to avoid boredom and loneliness. This incessant quest for distraction conceals a deep fear: the absence of meaning.',
            ],
            'entraide' => [
                'titre_en'       => 'Mutual Aid and Harmony',
                'description_en' => 'Mutual aid is the key to social harmony. It strengthens bonds, fosters cooperation and ensures balance in our lives when faced with the challenges of everyday existence.',
            ],
            'etres-vivants-information' => [
                'titre_en'       => 'Living Beings: Emitters and Receivers of Information',
                'description_en' => 'Living beings communicate constantly with their environment. They receive, analyse and emit information to interact, adapt and survive, forming a complex network of exchanges.',
            ],
            'fierte-puissance-argent' => [
                'titre_en'       => 'Pride, Power and Money',
                'description_en' => 'Pride, power and money are powerful forces that shape societies and individuals. They are often intertwined, yet can also destroy one another.',
            ],
            'fragile-puissant' => [
                'titre_en'       => 'Living Beings: Power and Fragility',
                'description_en' => 'Living beings embody a fascinating balance between strength and vulnerability. This paradox reflects their capacity to adapt, create and evolve, while remaining subject to the laws of nature and time.',
            ],
            'haine-indifference-amour' => [
                'titre_en'       => 'Hatred, Indifference and Love',
                'description_en' => 'These three emotional states are inseparable from our existence. Understanding their role and their proper place allows us to navigate human relationships and life choices more clearly.',
            ],
            'humanite-amour-mort' => [
                'titre_en'       => 'Humanity, Love and Death',
                'description_en' => 'These three concepts shape our existence. Humanity seeks meaning, love provides answers, and death reminds us of our fragility. Understanding them illuminates our path in life.',
            ],
            'inevitable-servitude' => [
                'titre_en'       => 'Inevitable Servitude',
                'description_en' => 'Servitude — whether chosen or imposed — is an integral part of the human condition. It questions our freedom, our choices and our dependence on others and social structures.',
            ],
            'lachete-courage' => [
                'titre_en'       => 'Flight, Cowardice and Courage',
                'description_en' => 'These three closely linked notions define our reactions in the face of adversity. Understanding their nuances helps us better grasp our choices and navigate with wisdom between fear and bravery.',
            ],
            'logique-sacrifice' => [
                'titre_en'       => 'The Logic of Sacrifice',
                'description_en' => 'Sacrifice, often perceived as a loss, is in reality a universal mechanism for creating, preserving or transforming. Understanding its logic reveals its essential role in human life.',
            ],
            'normalite' => [
                'titre_en'       => 'Normality: Immutable to Influenceable',
                'description_en' => 'Normality was long considered a stable reference, but it is now in constant evolution. This change can be a source of progress, but also of social and psychological drift and disruption.',
            ],
            'optimisme' => [
                'titre_en'       => 'Seeing the Glass Half Full',
                'description_en' => '"Seeing the glass half full" is a metaphor embodying an optimistic attitude in the face of difficulties. It invites us to perceive opportunities in everyday challenges rather than focusing on what is lacking.',
            ],
            'puissance-soumission-liberte' => [
                'titre_en'       => 'Power, Submission and Fear of Freedom',
                'description_en' => 'Power exerts a strong influence on individuals, sometimes creating a desire for submission. The fear of freedom can then block autonomy and trap people within a system of control.',
            ],
            'tripartition-etre' => [
                'titre_en'       => 'The Tripartition of Being',
                'description_en' => 'The human being is a complex entity composed of Body, Soul and Spirit. Each of these elements plays a vital role in our inner balance and our relationship with the world.',
            ],
            'verite-raison' => [
                'titre_en'       => 'Truth and Reason',
                'description_en' => 'The quest for truth is intrinsically linked to human reason. This connection can lead to a deeper understanding of oneself and the world, but also raises complex challenges.',
            ],
            'vitalite-emotions' => [
                'titre_en'       => 'Vitality and Emotions',
                'description_en' => 'Vitality — the force of life and energy — is intrinsically linked to emotions. They shape our well-being, influence our actions and can sometimes limit or reinforce our daily dynamism.',
            ],
            'volonte-puissance-desharmonie' => [
                'titre_en'       => 'Will to Power and Disharmony',
                'description_en' => 'The will to power — a quest for personal domination — can create a profound disharmony in our lives. Seeking to control everything around us generates internal and social conflicts.',
            ],

            // ── LA VIE EST [...] ──────────────────────────────────────────────
            'champ-de-bataille' => [
                'titre_en'       => 'Life is a Battlefield',
                'description_en' => 'A powerful metaphor illustrating the struggles, challenges and victories of existence. Each day, we are called to fight in order to move forward, evolve and triumph over ourselves.',
            ],
            'dialogue-chaos' => [
                'titre_en'       => 'Life is a Dialogue with Chaos',
                'description_en' => 'An exploration of the constant interactions between order and chaos, where human beings learn to navigate the unpredictable in order to find balance and build meaning in their existence.',
            ],
            'enfer-necessaire' => [
                'titre_en'       => 'Life is a Necessary Hell',
                'description_en' => 'Life, despite its trials and pain, is an essential forge where the soul is strengthened, learns and evolves. Its sufferings are necessary in order to reach wisdom and fulfilment.',
            ],
            'jeu-video-realiste' => [
                'titre_en'       => 'Life is a Realistic Video Game',
                'description_en' => 'Life can be perceived as an immense video game, where each individual embodies a character evolving in a complex world, confronted with challenges, choices and multiple quests.',
            ],
            'orchestre-symphonique' => [
                'titre_en'       => 'Life is a Symphony Orchestra',
                'description_en' => 'Life resembles a symphony orchestra where every element plays a unique role. To create harmony, one must coordinate talents, overcome discord and follow the melody of existence.',
            ],
            'paradis-precaire' => [
                'titre_en'       => 'Life is a Precarious Paradise',
                'description_en' => 'Life is a fragile balance between happiness and uncertainty. This paradise can tip at any moment, demanding vigilance and gratitude to preserve its beauty and serenity.',
            ],
            'piece-theatre' => [
                'titre_en'       => 'Life is a Play',
                'description_en' => 'Life is a staging in which each person plays a role. Between masks and improvisations, we learn to navigate this great human comedy and give meaning to our existence.',
            ],
        ];
    }
}
